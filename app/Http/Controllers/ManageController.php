<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class ManageController extends Controller
{
    public function index() {
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }

    public function add() {
        return view ('addarticle');
    }

    public function create(Request $request) {
        Article:: create ([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'image' => $request->image
        ]);
        return redirect ('/manage');
    }

    public function edit ($id) {
        $articles = Article::find($id);
        return view('editarticle', ['articles' => $articles]);
    }

    public function update($id, Request $request) {
        $articles = Article::find($id);
        $articles->title   = $request->title;
        $articles->content = $request->content;
        $articles->link = $request->link;
        $articles->image = $request->image;
        $articles->save();
        return redirect ('/manage');
    }

    public function delete ($id) {
        $articles = Article::find($id);
        $articles->delete();
        return redirect ('/manage');
    
    }
}