<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('gym__member__details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrainedTo('users');
            $table->foreignId('service_id')->constrainedTo('services');
            $table->string('member_ship_name');
            $table->dateTime('member_ship_end_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym__member__details');
    }
};