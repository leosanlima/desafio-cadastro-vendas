<?php namespace Zptdigital\Cadastrovendas\Controllers;

use Backend\Classes\Controller;
use BackendMenu;

class Sales extends Controller
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
        BackendMenu::setContext('Zptdigital.Cadastrovendas', 'main-menu-add-salles', 'side-menu-salles');
    }
}
