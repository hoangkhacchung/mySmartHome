<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMqttServerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mqttserver', function (Blueprint $table) {
            $table->increments('MaMQTT');
            $table->integer('MaKH');
            $table->string('customername');
            $table->string('manageusers')->unique();            
            $table->string('passmanageusers');
            $table->string('serverulr');
            $table->integer('port');            
            $table->string('topicpublish');
            $table->string('topicsubscribe');
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
        Schema::dropIfExists('mqttserver');
    }
}
