<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('user_id');
            $table->integer('display_order_id')->nullable();
            $table->string('title')->nullable();
            $table->string('name');
            $table->string('team_slug')->unique();
            $table->longText('bio');
            $table->string('team_image')->nullable();
            $table->string('team_status')->nullable();
            $table->string('team_role')->nullable();
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
