<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Banner extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('banner', function (Blueprint $table) {

            $table->increments('id');
            $table->string('banner_name');
            $table->string('photo');
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
        Schema::dropIfExists('banner'); // yanlışlık olursa geri alabilmemizi sağlar
    }
}
