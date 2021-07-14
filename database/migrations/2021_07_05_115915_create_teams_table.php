<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTeamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teams', function (Blueprint $table) {
            $table->id();
            $table->string('leader_id');
            $table->string('member_one_id');
            $table->string('member_two_id');
            $table->string('member_three_id');
            $table->string('member_four_id');
            $table->integer('champion_count');
            $table->integer('runnerup_count');
            $table->integer('third_count');
            $table->integer('totalpoint');
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
        Schema::dropIfExists('teams');
    }
}
