<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'code' => 200,
            'message' => 'this is article index'
        ]);
    }
}