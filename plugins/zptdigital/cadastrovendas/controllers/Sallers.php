<?php namespace Zptdigital\Cadastrovendas\Controllers;

use Zptdigital\Cadastrovendas\Models\Sales;
use Backend\Classes\Controller;
use BackendMenu;
use DB;

class Sallers extends Controller
{
    public $implement = [        
        'Backend\Behaviors\ListController',        
        'Backend\Behaviors\FormController',
        'Backend.Behaviors.RelationController'
    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';
    public $relationConfig = 'config_relation.yaml';

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zptdigital.Cadastrovendas', 'main-menu-add-salles', 'side-menu-sallers');
    }

    public function update($recordId, $context = null) {
        
        $sales = Sales::where('seller_id', $recordId)
        ->select(Db::raw('SUM(amount) as total'), 'date_sale')
        ->groupBy('date_sale')
        ->orderBy('date_sale')
        ->get();
        
        $sales_chart = null;

        foreach ($sales as $sale) {

            $sales_chart .= '['.strtotime($sale->date_sale).'000,'.$sale->total.'],';
        }

        $this->vars['sales_chart'] = substr($sales_chart, 0, -1);

        return $this->asExtension('FormController')->update($recordId, $context);
    }

    
}

