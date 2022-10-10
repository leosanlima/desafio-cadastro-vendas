<?php namespace Zptdigital\Cadastrovendas;

use Log;
use System\Classes\PluginBase;
use Zptdigital\Cadastrovendas\Models\Sales as SalesModel;
use Zptdigital\Cadastrovendas\Models\Seller as SellerModel;
use Zptdigital\Cadastrovendas\Models\Product as ProductModel;
use BackendAuth;

class Plugin extends PluginBase
{

    public function boot()
    {
        SellerModel::extend(function($model) {
            $model->bindEvent('model.afterSave', function () use ($model) {
                Log::info('Cadastro/Alteração do Vendedor. Usuário: ' . BackendAuth::getUser()->login);
            });
        });

        SalesModel::extend(function($model) {
            $model->bindEvent('model.afterSave', function () use ($model) {
                Log::info('Cadastro/Alteração no Registro de Vendas. Usuário: ' . BackendAuth::getUser()->login);
            });
        });

        ProductModel::extend(function($model) {
            $model->bindEvent('model.afterSave', function () use ($model) {
                Log::info('Cadastro/Alteração no Produto. Dados: ' . $model->toJson());
            });
        });
    }


    public function registerComponents()
    {
    }

    public function registerSettings()
    {
    }
}
