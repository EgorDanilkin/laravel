<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdminTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {

        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('user_id')
                ->references('id')
                ->on('users');
            $table->timestamps();
        });

        $password = \Hash::make('123456789');

        DB::table('users')->insert([
            'name' => 'Admin',
            'email' => 'admin@admin',
            'password' => $password,
        ]);

        $user = \DB::table('users')
            ->where('email', '=', 'admin@admin')
            ->first();

        DB::table('admins')->insert([
            'user_id' => $user->id,
        ]);

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
