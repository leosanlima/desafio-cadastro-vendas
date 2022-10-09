<?php namespace Zptdigital\Cadastrovendas\Models;

use Model;

/**
 * Model
 */
class Sales extends Model
{
    use \October\Rain\Database\Traits\Validation;

    /**
     * @var string The database table used by the model.
     */
    public $table = 'zptdigital_cadastrovendas_vendas';

    //protected $dates = ['date_sale'];

    /**
     * @var array Validation rules
     */
    public $rules = [
        'seller' => 'required',
        'reference' => 'required',
        'product' => 'required',
        'amount' => 'required',
        'date_sale' => 'required',
    ];


    public $belongsTo = [
        'seller' => [\Zptdigital\Cadastrovendas\Models\Seller::class],
        'product' => [\Zptdigital\Cadastrovendas\Models\Product::class]
    ];

}
