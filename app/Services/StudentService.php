<?php

namespace App\Services;

use App\Models\Student;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;

class StudentService
{
    public function list(): LengthAwarePaginator
    {
        return Student::select(["id", "first_name", "last_name", "email", "phone", "city", "state", "country", "created_at", "updated_at"])->where("is_active", true)->where("deleted_at", null)->orderBy("id", "desc")->paginate(10);
    }
    public function create(array $data): Student
    {
        return Student::create($data);
    }
    public function update(Student $student, array $data): Student
    {
        $student->update($data);
        return $student;
    }
    public function delete(Student $student): void
    {
        // $student->delete();
    }
}
