<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    public function classrooms()
    {
        return $this->belongsToMany(Classroom::class, 'classroom_subjects');
    }
}
