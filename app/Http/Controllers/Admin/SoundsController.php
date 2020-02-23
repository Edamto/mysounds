<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;

class SoundsController extends Controller
{
    public function add()
    {
        return view('admin.article.create');
    }
    
    public function create(Request $request)
    {
        
        $this->validate($request, Article::$rules);
        
        $article = new Article;
        $form = $request->all();
        
        unset($form['_token']);
        
        $article->fill($form);
        $article->save();
        
        return redirect('admin/article/create');
    }
}
