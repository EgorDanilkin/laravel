<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news', function (Blueprint $table) {
            $table->id();
            $table->string('title', 50)
                ->unique()
                ->nullable(false)
                ->comment('Заголовок');
            $table->text('content')
                ->nullable(true);
            $table->string('source', 100)
                ->nullable(true);
            $table->dateTime('publish_date')
                ->nullable(true)
                ->index();
            $table->string('image', 100)
                ->nullable(true);
            $table->bigInteger('status_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('status_id')
                ->references('id')
                ->on('statuses');
            $table->bigInteger('category_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('category_id')
                ->references('id')
                ->on('categories');
            $table->bigInteger('source_id')
                ->unsigned()
                ->nullable(false);
            $table->foreign('source_id')
                ->references('id')
                ->on('sources');
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
        Schema::dropIfExists('news');
    }
}
