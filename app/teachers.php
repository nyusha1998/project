<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class teachers extends Model
{

    private $table_name = 'teachers';
    //
    public function getAllTeachers() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
    
    
}
