<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        
        if (Schema::hasTable('products')) {
            //
        }
        else {
            Schema::create('products', function (Blueprint $table) {
                $table->increments('id_prod');
                $table->string('name_prod')->unique();
                $table->integer('jumlah');
                $table->integer('harga');
                $table->text('deskripsi');
                $table->timestamps();
            });   
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('products', function (Blueprint $table) {
            //
        });
    }
}
