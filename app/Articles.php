<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Articles extends Model
{
	private $table_name = 'articles';
    //
    public function getAllArticles() {
        return DB::table($this->table_name)->get(); // ->paginate(2);
    }
}
