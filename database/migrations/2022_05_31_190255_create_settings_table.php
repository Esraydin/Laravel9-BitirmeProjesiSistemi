<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settings', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('title', 150);
            $table->string('keywords')->nullable();
            $table->string('description')->nullable();
            $table->string('company', 75)->nullable();
            $table->string('address', 150)->nullable();
            $table->string('phone', 20)->nullable();
            $table->string('fax', 20)->nullable();
            $table->string('email', 75)->nullable();
            $table->string('sntpemail', 75)->nullable();
            $table->string('sntppassword', 15)->nullable();
            $table->integer('smtpport')->nullable()->default(0);
            $table->string('facebook', 100)->nullable();
            $table->string('instagram', 100)->nullable();
            $table->string('twitter', 100)->nullable();
            $table->string('youtube', 100)->nullable();
            $table->text('aboutus')->nullable();
            $table->text('contact',)->nullable();
            $table->text('references',)->nullable();
            $table->string('icon', 50)->nullable();
            $table->string('status', 5)->nullable()->default('False');
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
};
