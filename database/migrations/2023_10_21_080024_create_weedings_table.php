<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('weedings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained();
            $table->string('code')->nullable();
            $table->string('groom')->nullable();
            $table->string('bride')->nullable();
            $table->dateTime('ceremony_date')->nullable();
            $table->text('ceremony_address')->nullable();
            $table->text('ceremony_maps')->nullable();
            $table->dateTime('reception_date')->nullable();
            $table->text('reception_address')->nullable();
            $table->text('reception_maps')->nullable();
            $table->boolean('is_live')->default(true);
            $table->string('status')->default('active');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weedings');
    }
};
