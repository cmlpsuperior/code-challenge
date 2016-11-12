<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ip', function (Blueprint $table) {
            $table->increments('id_ip');
            $table->string('ip_addres');
            $table->integer('id_link');
        });

        //las llaves foraneas
        Schema::table('ip', function (Blueprint $table) {
             $table->foreign('id_link')->references('id_link')->on('link');            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('ip');
    }
}
