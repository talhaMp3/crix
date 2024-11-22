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
        Schema::create('player_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('player_name');
            $table->string('mobile_number');
            $table->text('address');
            $table->string('player_photo');
            $table->enum('tshirt_size', ['S', 'M', 'L', 'XL', 'other']);
            $table->string('performance')->nullable();
            $table->string('payment_status')->nullable();
            $table->enum('cricket_skill', [
                'Left Hand Batsman',
                'Right Hand Batsman',
                'Right Hand Bowler',
                'Left Hand Bowler',
                'right hand all rounder',
                'left hand all rounder',
                'wicket keeper'
            ]);
            $table->string('tid');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('player_registrations');
    }
};
