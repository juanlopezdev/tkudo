<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->id();
            $table->text('title');
            $table->foreignId('created_by');
            $table->foreignId('recipient');
            $table->integer('card_received');
            $table->foreignId('board_template');
            $table->tinyInteger('status')->default(1);
            $table->timestamps();

            $table->foreign('created_by')->references('id')->on('users');
            $table->foreign('recipient')->references('id')->on('users');
            $table->foreign('board_template')->references('id')->on('board_templates');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boards');
    }
}
