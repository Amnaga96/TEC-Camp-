<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    public function index()
    {

        return Article::all();

    }

    public function show($a_id)
    {

        
    }

}
