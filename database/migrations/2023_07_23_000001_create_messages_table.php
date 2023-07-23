<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('client_id');
            $table->unsignedBigInteger('sender_id');
            $table->text('message');
            $table->unsignedBigInteger('partner_link_id')->nullable();
            $table->timestamps();

            $table->foreign('client_id')->references('id')->on('clients');
            $table->foreign('sender_id')->references('id')->on('senders');
            $table->foreign('partner_link_id')->references('id')->on('partner_links');
        });
    }

    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
