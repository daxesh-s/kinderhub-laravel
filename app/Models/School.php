<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;

class School extends Model
{
    use HasFactory,SoftDeletes;
    protected $fillable = [
        "name",
        "email",
        "phone",
        "address",
        "city",
        "state",
        "country",
        "postal_code",
        "logo",
        "is_active",
    ];
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, "school_id");
    }
    public function classRooms(): HasMany
    {
        return $this->hasMany(ClassRoom::class, "school_id");
    }
}