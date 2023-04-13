<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Training extends Model
{
    use HasFactory;

    protected $fillable = ['course_name', 'course_descr', 'level', 'duration', 'created_at', 'updated_at'];
}
