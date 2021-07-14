<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCompetititonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('competititons', function (Blueprint $table) {
            $table->id();
            $table->string('competition_name');
            $table->integer('quota');
            $table->integer('champion_prize');
            $table->integer('runnerup_prize');
            $table->integer('third_prize');
            $table->string('champion_team');
            $table->string('runnerup_team');
            $table->string('third_team');
            $table->integer('team_participate');
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
        Schema::dropIfExists('competititons');
    }
}
