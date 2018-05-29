<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\lamps;
use App\Http\Controllers\Controller;

class LampsController extends Controller
{
    //
     public function getAllLamps() {
        $lamps_obj = new lamps();
        $lamps = $lamps_obj->getAllLamps();
        return view('lamps', ['lamps'=>$lamps]);
    }

    public function deleteLamp($id) {
        $lamp_obj = new lamps();
        $lamps = $lamp_obj->deleteLamp($id);
        //return view('students', ['students'=>$students]);
        return back();
    }
                                   
public function addLamp(Request $request) {
        $lamp_obj = new lamps();
        if ($request->method()=='POST') {
            $name = $request['name'];
            $kreplenie = $request['kreplenie'];
            $width = $request['width'];
            $color = $request['color'];
            $material = $request['material'];
            $height = $request['height'];
            $lamp_obj->insertLamp($name, $kreplenie, $width, $color, $material, $height);
        }
        return view('add_success');
    }
    public function editLamp($id) {
        $lamp_obj = new lamps();
        $lamp = $lamp_obj->getLampForEdit($id);
        return view('lamp_edit', ['lamp'=>$lamp]);
    }
    public function updateLamp(Request $request, $id) {
        $lamp_obj = new lamps();
        $name = $request['name'];
            $kreplenie = $request['kreplenie'];
            $width = $request['width'];
            $color = $request['color'];
            $material = $request['material'];
            $height = $request['height'];
        $lamp = $lamp_obj->updateLamp($id, $name, $kreplenie, $width, $color, $material, $height);
        return view('add_success');
    } 

    public function getAllLamps2() {
        $lamps2_obj = new lamps();
        $lamps2 = $lamps2_obj->getAllLamps2();
        return view('lamps2', ['lamps2'=>$lamps2]);
    }

    public function deleteLamp2($id) {
        $lamp2_obj = new lamps();
        $lamps2 = $lamp2_obj->deleteLamp2($id);
        //return view('students', ['students'=>$students]);
        return back();
    } 

    public function addLamp2(Request $request) {
        $lamp2_obj = new lamps();
        if ($request->method()=='POST') {
            $name = $request['name'];
            $kreplenie = $request['kreplenie'];
            $width = $request['width'];
            $color = $request['color'];
            $material = $request['material'];
            $height = $request['height'];
            $lamp2_obj->insertLamp2($name, $kreplenie, $width, $color, $material, $height);
        }
        return view('add_success');
    }
    public function editLamp2($id) {
        $lamp2_obj = new lamps();
        $lamp2 = $lamp2_obj->getLampForEdit($id);
        return view('lamp2_edit', ['lamp2'=>$lamp]);
    }
    public function updateLamp2(Request $request, $id) {
        $lamp2_obj = new lamps();
        $name = $request['name'];
            $kreplenie = $request['kreplenie'];
            $width = $request['width'];
            $color = $request['color'];
            $material = $request['material'];
            $height = $request['height'];
        $lamp2 = $lamp2_obj->updateLamp($id, $name, $kreplenie, $width, $color, $material, $height);
        return view('add_success');
    }                                  
}
