<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class subjects extends Model
{

    private $table_name = 'subjects';
    //
    public function getAllSubjects() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
    
    
}
