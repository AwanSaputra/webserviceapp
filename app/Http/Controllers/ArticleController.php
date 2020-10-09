<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Article;

class ArticleController extends Controller
{
    
    public function index()
    {
        return response()->json([
            'code' => 200,
            'message' => 'this is article index'
        ]);
    }

    public function create(Request $request){

        $this->validate($request,[
            'title' => 'required|min:20',
            'content' => 'required'
        ]);

        
        $article = new Article;
        $article->title = $request->title;
        $article->content= $request->content;

        if($article->save()){
            return response()->json([
                'code' => 200,
                'message' => 'new article created'
            ]);
        }

        return response()->json([
                'code' => 400,
                400,
                'message' => 'error creating article'
        ]);

    }
}