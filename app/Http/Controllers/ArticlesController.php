<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Jobs\ResizeImage;

class ArticlesController extends Controller
{
    public function create()
    {
        return view('create');
    }

    public function store(Request $request)
    {
        
        $validation = $request->validate([
            'title' => 'required|max:50',
            'author' => 'required|max:50',
            'body' => 'required|max:255',
            'picture' => 'required|image:jpeg,png,jpg,gif|max:2048',            
        ]);
        
        $imageName = time().'.'.$request->picture->extension();              
        
        $request->picture->move(public_path('queueImages'), $imageName);
        
        ResizeImage::dispatch($imageName);

        $article = new \App\Articles;
        $article->title = $request->title;
        $article->author = request('author');
        $article->body = request('body');
        $article->picture = $imageName;

        $article->save();

        return redirect('/');
    }

    public function show($id)
    {        
        $article = \App\Articles::find($id);

        return view('show', ['article' => $article]);
    }    
}
