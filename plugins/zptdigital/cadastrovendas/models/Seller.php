<?php namespace Zptdigital\Cadastrovendas\Models;

use Model;

/**
 * Model
 */
class Seller extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zptdigital_cadastrovendas_vendedores';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name' => 'required',
        'email'  => 'required',
        'cpf' => 'required',
        'mobile' => 'required',
        'birth_date' => 'required',
    ];

    public $attachOne = [
        'photo' => 'System\Models\File'
    ];
}
