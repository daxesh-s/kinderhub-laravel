<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ClassRoom extends Model
{
    use HasFactory,SoftDeletes;
    protected $table = "classes";
    protected $fillable = [
        "school_id",
        "name",
        "section",
    ];

    public function school(): BelongsTo
    {
        return $this->belongsTo(School::class);
    }
    public function students(): HasMany
    {
        return $this->hasMany(Student::class, "class_id");
    }
}