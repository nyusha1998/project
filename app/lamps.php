<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class lamps extends Model
{

    private $table_name = 'lamps';
    //
    public function getAllLamps() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
    
    public function deleteLamp($id) {
        return DB::table($this->table_name)->where('id', $id)->delete();
    }
    public function addLamp() {
        return DB::table($this->table_name)->insert();
    }
    public function insertLamp($name, $kreplenie, $width, $color, $material, $height) {
        return DB::table($this->table_name)->insert(['name' => $name, 'kreplenie' => $kreplenie, 'width' => $width,'color' => $color, 'material' => $material, 'height' => $height]);
    }
    public function getLampForEdit($id) {
        return DB::table($this->table_name)->where('id', $id)->first();
    }
    public function updateLamp($id, $name, $kreplenie, $width, $color, $material, $height) {
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update(['name' => $name, 'kreplenie' => $kreplenie, 'width' => $width,'color' => $color, 'material' => $material, 'height' => $height]);
    }

    public function getAllLamps2() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
    
    public function deleteLamp2($id) {
        return DB::table($this->table_name)->where('id', $id)->delete();
    }

     public function addLamp2() {
        return DB::table($this->table_name)->insert();
    }
    public function insertLamp2($name, $kreplenie, $width, $color, $material, $height) {
        return DB::table($this->table_name)->insert(['name' => $name, 'kreplenie' => $kreplenie, 'width' => $width,'color' => $color, 'material' => $material, 'height' => $height]);
    }
    public function getLampForEdit2($id) {
        return DB::table($this->table_name)->where('id', $id)->first();
    }
    public function updateLamp2($id, $name, $kreplenie, $width, $color, $material, $height) {
        return DB::table($this->table_name)
            ->where('id', $id)
            ->update(['name' => $name, 'kreplenie' => $kreplenie, 'width' => $width,'color' => $color, 'material' => $material, 'height' => $height]);
    }
}
