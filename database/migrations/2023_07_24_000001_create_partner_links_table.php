<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePartnerLinksTable extends Migration
{
    public function up()
    {
        Schema::create('partner_links', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('link');
            $table->timestamps();
        });

        Schema::create('clicks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('partner_link_id');
            $table->unsignedBigInteger('message_id');
            $table->timestamps();

            $table->foreign('partner_link_id')->references('id')->on('partner_links');
            $table->foreign('message_id')->references('id')->on('messages');
        });
    }

    public function down()
    {
        Schema::dropIfExists('clicks');
        Schema::dropIfExists('partner_links');
    }
}
