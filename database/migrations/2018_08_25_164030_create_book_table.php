<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id');
            $table->string('book_name');
            $table->tinyInteger('type')->comment('free 0, not free 1');
            $table->tinyInteger('feature')->comment('Y 1')->nullable();
            $table->text('book_content')->nullable();
            $table->string('price')->nullable();
            $table->string('author')->nullable();
            $table->string('book_url')->nullable();
            $table->date('upd_date');
            $table->date('ins_date');
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
        Schema::dropIfExists('book');
    }
}
