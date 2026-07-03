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
        Schema::create('schools', function (Blueprint $table) {
            $table->id();
            $table->string('name')->index();
            $table->string('email')->unique();
            $table->string('phone');
            $table->text("address");
            $table->string("city", 30)->index();
            $table->string("state", 30)->index();
            $table->string("country", 30)->index();
            $table->string("postal_code", 30);
            $table->string("logo")->nullable();
            $table->boolean("is_active")->default(true);
            $table->index(['state', 'city']);
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('schools');
    }
};