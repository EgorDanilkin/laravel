<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersSocialTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users_social', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')
                ->unsigned()
                ->nullable(false)
                ->unique();
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->bigInteger('vkontakte_id')
                ->unsigned()
                ->nullable(true)
                ->unique();
            $table->bigInteger('facebook_id')
                ->unsigned()
                ->nullable(true)
                ->unique();
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
        Schema::dropIfExists('users_social');
    }
}
