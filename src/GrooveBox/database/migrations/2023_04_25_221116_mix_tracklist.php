<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class MixTracklist extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mix_tracklist', function (Blueprint $table) {

            $table->id();

            $table->unsignedBigInteger('mix_id');
            $table->unsignedBigInteger('tracklist_id');

            $table->foreign('tracklist_id')
                ->references('id')
                ->on('tracklists')
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
