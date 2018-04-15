<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdauctsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prodaucts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('productName');
            $table->integer('categoryid');
            $table->integer('menufracturerid');
            $table->float('productPrice',10,2);
            $table->integer('productQantity');
            $table->text('shortDiscription');
            $table->text('longDiscription');
            $table->text('productImage');
            $table->tinyInteger('productstatusinfo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prodaucts');
    }
}
