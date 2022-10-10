<?php namespace Zptdigital\Cadastrovendas\Controllers;

use Backend\Classes\Controller;
use BackendMenu;
use Zptdigital\Cadastrovendas\Models\Product;
use Zptdigital\Cadastrovendas\Models\Sales;
use DB;

class Products extends Controller
{
    public $implement = [        'Backend\Behaviors\ListController',        'Backend\Behaviors\FormController'    ];
    
    public $listConfig = 'config_list.yaml';
    public $formConfig = 'config_form.yaml';

    public $requiredPermissions = [
        'manage_sales_record' 
    ];

    public function __construct()
    {
        parent::__construct();
        BackendMenu::setContext('Zptdigital.Cadastrovendas', 'main-menu-add-salles', 'side-menu-products');
    }

    public function bestsellers()
    {
        $bestsellers = null;

        $products = Product::all();

        foreach ($products as $product) {
            $total_sales = Sales::where('product_id', $product->id)->select(DB::raw('SUM(amount) as total'))->first();
            $bestsellers[$product->name] = $total_sales->total;
        }

        arsort($bestsellers);

        $this->vars['bestsellersreport'] = $bestsellers;
    }
}
