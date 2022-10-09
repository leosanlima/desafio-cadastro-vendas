<?php namespace Zptdigital\Cadastrovendas\Models;

use Model;

/**
 * Model
 */
class Product extends Model
{
    use \October\Rain\Database\Traits\Validation;
    
    use \October\Rain\Database\Traits\SoftDelete;

    protected $dates = ['deleted_at'];


    /**
     * @var string The database table used by the model.
     */
    public $table = 'zptdigital_cadastrovendas_produtos';

    /**
     * @var array Validation rules
     */
    public $rules = [
        'name'=>'required'
    ];

    public $attachMany = [
        'images' => 'System\Models\File'
    ];
}
