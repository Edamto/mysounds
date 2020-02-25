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
    
    public function index(Request $request)
    {
        $cond_title = $request->cond_title;
        if ($cond_title != '') {
            $posts = Article::where('title', $cond_title)->get();
        } else {
            $posts = Article::all();
        }
        return view('admin.article.index', ['posts' => $posts, 'cond_title' => $cond_title]);
        }
    }
