<?php namespace Zptdigital\Cadastrovendas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZptdigitalCadastrovendasVendedores extends Migration
{
    public function up()
    {
        Schema::create('zptdigital_cadastrovendas_vendedores', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('email');
            $table->string('cpf');
            $table->date('birth_date');
            $table->string('mobile');
            $table->string('address_street')->nullable();
            $table->string('address_number')->nullable();
            $table->string('address_others')->nullable();
            $table->string('address_postcode')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });

    }
    
    public function down()
    {
        Schema::dropIfExists('zptdigital_cadastrovendas_vendedores');
    }
}