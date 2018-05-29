<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\teachers;

class TeachersController extends Controller
{
    //
    public function getAllTeachers() {
        $teachers_obj = new teachers();
        $teachers = $teachers_obj->getAllTeachers();
        return view('teachers', ['teachers'=>$teachers]);
    }
}
