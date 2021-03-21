<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSettingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('logo');
            $table->text('description')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('contact')->nullable();
            $table->string('contact2')->nullable();
            $table->string('fb')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('whatsapp')->nullable();
            $table->string('skype')->nullable();
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
        Schema::dropIfExists('settings');
    }
}
