<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class GenreMix extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('genre_mix', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('genre_id');
            $table->unsignedBigInteger('mix_id');

            $table->foreign('genre_id')
                ->references('id')
                ->on('genres')
                ->cascadeOnDelete()
                ->cascadeOnUpdate();

            $table->foreign('mix_id')
                ->references('id')
                ->on('mixes')
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
        //
    }
}
