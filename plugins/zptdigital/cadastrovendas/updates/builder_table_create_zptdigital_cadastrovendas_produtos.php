<?php namespace Zptdigital\Cadastrovendas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZptdigitalCadastrovendasProdutos extends Migration
{
    public function up()
    {
        Schema::create('zptdigital_cadastrovendas_produtos', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->string('brand');
            $table->string('model')->nullable();
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zptdigital_cadastrovendas_produtos');
    }
}