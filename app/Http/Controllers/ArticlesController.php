<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Articles;
use App\Http\Controllers\Controller;

class ArticlesController extends Controller
{
    //
     public function getAllArticles() {
        $Articles_obj = new Articles();
        $Articles = $Articles_obj->getAllArticles();
        return view('Articles', ['Articles'=>$Articles]);
        // return DB:: table($this->table_name)->get();
    }
}
