<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Blog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('blogs', function (Blueprint $table) {

            $table->increments('id');
            $table->string('head');
            $table->text('content')->nullable();
            $table->string('thumbnail',250)->nullable();
            $table->Integer('comment')->unsigned();
            $table->Integer('created_by')->unsigned();
            $table->timestamps();

            $table->foreign('created_by') // baglancak id
            ->references('id') // baglana id
            ->on('users') //baglanan table
            ->cascadeOnDelete()
                ->cascadeOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('blogs'); // yanlışlık olursa geri alabilmemizi sağlar
    }
}
