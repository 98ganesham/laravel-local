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
        Schema::create('gym-_payments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrainedTo('users');
            $table->foreignId('service_id')->constrainedTo('services');
            $table->foreignId('gym_member_details_id')->constrainedTo('gym_member_details');
            $table->enum('payment_type', ['kpay', 'cash', 'credit'])->default('cash');
            $table->dateTime('payment_last_date');
            $table->dateTime('end_of_membership_date');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gym-_payments');
    }
};