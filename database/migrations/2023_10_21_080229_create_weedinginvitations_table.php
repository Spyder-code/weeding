<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('weeding_invitations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('weeding_id')->constrained('weedings');
            $table->string('name')->nullable();
            $table->string('phone')->nullable();
            $table->string('address')->nullable();
            $table->string('send_message_status')->default('waiting');
            $table->string('attended')->default('waiting');
            $table->text('message')->nullable();
            $table->softDeletes();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('weeding_invitations');
    }
};
