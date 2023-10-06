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
        Schema::create('feed_back', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrainedTo('users');
            $table->enum('user_details', ['user_email', 'user_phone']);
            $table->integer('rating')->default(0);
            $table->text('descriptions_suggestions');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feed_bacs');
    }
};