<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHistorymatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('historymatches', function (Blueprint $table) {
            $table->id();
            $table->integer('team_id');
            $table->integer('enemy_team_id');
            $table->integer('score');
            $table->integer('winner_team_id');
            $table->integer('loser_team_id');
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
        Schema::dropIfExists('historymatches');
    }
}
