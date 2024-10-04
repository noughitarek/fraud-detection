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
        Schema::create('suspiciouses', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('subscription');
            $table->foreign('subscription')->references('id')->on('subscriptions');
            $table->unsignedBigInteger('checked_by')->nullable();
            $table->foreign('checked_by')->references('id')->on('users');
            $table->string('response')->nullable();
            $table->timestamp('checked_at')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('suspiciouses');
    }
};
