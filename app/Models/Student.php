<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Student extends Model
{
    use SoftDeletes;
    protected $fillable = [
        "school_id",
        "class_id",
        "admission_number",
        "roll_number",
        "first_name",
        "last_name",
        "gender",
        "date_of_birth",
        "father_name",
        "mother_name",
        "email",
        "phone",
        "address",
        "city",
        "state",
        "country",
        "postal_code",
        "blood_group",
        "nationality",
        "religion",
        "caste",
        "medical_notes",
        "emergency_contact_name",
        "emergency_contact_phone",
        "admission_date",
        "previous_school",
        "profile_picture",
        "is_active",
    ];
    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
    public function classRoom(): BelongsTo
    {
        return $this->belongsTo(ClassRoom::class);
    }
}