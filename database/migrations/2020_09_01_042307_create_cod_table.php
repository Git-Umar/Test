<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCodTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cod', function (Blueprint $table) {
            $table->bigIncrements('addrid');
            $table->string('oddrid')->nullable();
            $table->string('usrid')->nullable();
            $table->integer('addruid')->nullable();
            $table->string('addrcity')->nullable();
            $table->string('addrstate')->nullable();
            $table->string('addrline1')->nullable();
            $table->string('addrline2')->nullable();
            $table->string('addrpincode')->nullable();
            $table->integer('opoid')->nullable();
            $table->integer('oppid')->nullable();
            $table->string('oppname')->nullable();
            $table->string('oppprice')->nullable();
            $table->string('oppquantity')->nullable();
            $table->string('oppshipping')->nullable();
            $table->string('ocoupname')->nullable();
            $table->string('ocoupdiscount')->nullable();
            $table->string('oppdoorprice')->nullable();
            $table->integer('opinstall')->nullable();
            $table->string('type')->nullable();
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
        Schema::dropIfExists('cod');
    }
}
