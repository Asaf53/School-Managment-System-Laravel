<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use Eloquent;

class classroom_subject extends Model
{
    use HasFactory;
    public $timestamps = false; 
    protected $fillable = [
        'classroom_id',
        'subject_id',
    ];
}
