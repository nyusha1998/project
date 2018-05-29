<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\subjects;

class SubjectsController extends Controller
{
    //
     public function getAllSubjects() {
        $subjects_obj = new subjects();
        $subjects = $subjects_obj->getAllSubjects();
        return view('subjects', ['subjects'=>$subjects]);
    }
}
