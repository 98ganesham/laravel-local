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
        Schema::create('gyms', function (Blueprint $table) {
            $table->id();
            $table->string('gym_address');
            $table->string('gym_class_name');
            $table->time('gym_class_time');
            $table->foreignId('service_id')->constrainedTo('services');
            $table->foreignId('gym_member_details_id')->constrainedTo('gym_member_details');
            $table->foreignId('gym_payement_id')->constrainedTo('gym_payement');
            $table->foreignId('trainer_id')->constrainedTo('trainers');
            $table->foreignId('user_id')->constrainedTo('users');
            $table->foreignId('feed_back_id')->constrainedTo('feed_back');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gyms');
    }
};