<?php

namespace App\Services;

use App\Models\School;

class SchoolService
{
    public function get_school_lists(): array
    {
        return School::select(["id", "name"])->where("is_active", true)->orderBy("id", "desc")->get()->toArray();
    }
}
