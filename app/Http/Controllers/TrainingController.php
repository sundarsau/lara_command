<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Training;

class TrainingController extends Controller
{
    public function createCourse(){
        $data = [
            'course_name'  => 'Java', 
            'course_descr' => 'Core Java Training', 
            'level'        => 'Basic', 
            'duration'     => '3 weeks',
        ];
        Training::create($data);
    }
}
