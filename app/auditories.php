<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class auditories extends Model
{

    private $table_name = 'auditories';
    //
    public function getAllAuditories() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
    
   }
