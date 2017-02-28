<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('domain');
            $table->string('homepage');
            $table->integer('user_id');
            $table->text('tracking_fb');
            $table->text('tracking_ga');            
            $table->string('fbmsg');
            $table->string('linemsg');            
            $table->integer('ping');
            $table->integer('plan');
            $table->binary('email_config');
            $table->timestamp('deadline');
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
        Schema::dropIfExists('stores');
    }
}
