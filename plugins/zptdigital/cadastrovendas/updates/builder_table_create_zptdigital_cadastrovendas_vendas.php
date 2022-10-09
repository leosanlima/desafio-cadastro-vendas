<?php namespace Zptdigital\Cadastrovendas\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateZptdigitalCadastrovendasVendas extends Migration
{
    public function up()
    {
        Schema::create('zptdigital_cadastrovendas_vendas', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('reference');
            $table->integer('seller_id');
            $table->integer('product_id');
            $table->integer('amount')->unsigned();
            $table->timestamp('date_sale');
            $table->text('description')->nullable();
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('zptdigital_cadastrovendas_vendas');
    }
}