<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\auditories;

class AuditoriesController extends Controller
{
    //
     public function getAllAuditories() {
        $auditories_obj = new auditories();
        $auditories = $auditories_obj->getAllAuditories();
        return view('auditories', ['auditories'=>$auditories]);
    }
}
