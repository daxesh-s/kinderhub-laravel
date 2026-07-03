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
        Schema::create('students', function (Blueprint $table) {
            // Relationships
            $table->foreignId('school_id')
                ->constrained()
                ->cascadeOnDelete();
            $table->foreignId('class_id')
                ->constrained()
                ->cascadeOnDelete();

            // Student Identification
            $table->string('admission_number')->unique();
            $table->unsignedInteger('roll_number')->nullable();

            // Personal Information
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['MALE', 'FEMALE', 'OTHER']);
            $table->date('date_of_birth');

            // Parent Information
            $table->string('father_name');
            $table->string('mother_name');

            // Contact Information
            $table->string('email')->nullable();
            $table->string('phone')->nullable();

            // Address
            $table->text('address');
            $table->string('city', 30)->index();
            $table->string('state', 30)->index();
            $table->string('country', 30)->index();
            $table->string('postal_code', 20);

            // Additional Information
            $table->string('blood_group', 5)->nullable();
            $table->string('nationality')->nullable();
            $table->string('religion')->nullable();
            $table->string('caste')->nullable();

            // Medical Information
            $table->text('medical_notes')->nullable();
            $table->string('emergency_contact_name')->nullable();
            $table->string('emergency_contact_phone')->nullable();

            // Academic Information
            $table->date('admission_date');
            $table->string('previous_school')->nullable();

            // Files
            $table->string('profile_picture')->nullable();

            // Status
            $table->boolean('is_active')->default(true);

            // Soft Delete & Timestamps
            $table->softDeletes();
            $table->timestamps();

            // Composite Indexes
            $table->index(['school_id', 'roll_number']);
            $table->index(['school_id', 'admission_number']);
            $table->index(['state', 'city']);
            $table->unique(['class_id', 'roll_number']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};