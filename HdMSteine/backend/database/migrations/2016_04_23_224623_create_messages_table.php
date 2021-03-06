<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */

    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {

            $table->engine = 'InnoDB';

            $table->increments('id');
            $table->timestamps();

            $table->text('message');

            $table->Integer('sender_id')->unsigned();
            $table->Integer('conversation_id')->unsigned();

            $table->foreign('sender_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('conversation_id')->references('id')->on('conversations')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('messages');
    }
}
