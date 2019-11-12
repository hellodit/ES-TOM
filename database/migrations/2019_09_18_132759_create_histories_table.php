<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rule_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('childname');
            $table->char('gender');
            $table->date('birthday');
            $table->char('user_id',36);
            $table->foreign('user_id')->references('id')->on('users');
            $table->unsignedBigInteger('rule_id')->nullable();
            $table->foreign('rule_id')->references('id')->on('rules');
            $table->char('status');
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
        Schema::dropIfExists('histories');
    }
}
