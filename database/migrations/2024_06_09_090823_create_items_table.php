<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('img');
            $table->string('name_apps');
            $table->integer('room');
            $table->biginteger('price');
            $table->string('type');
            $table->string('desc');
            $table->string('city');
            $table->string('street');
            $table->string('garage');
            $table->integer('total_area');
            $table->integer('useble_area');
            $table->string('balcony');
            $table->string('terrace');
            $table->integer('bath');
            $table->string('img1');
            $table->string('img2');
            $table->string('img3');
            $table->string('fio_broker');
            $table->string('email_broker');
            $table->string('phone_broker');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('items');
    }
};
