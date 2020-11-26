<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
use PDF;
class ManageController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
        $this->middleware(function($request, $next) {
            if (Gate::allows('manage-articles')) return $next($request);
            abort(403, 'Anda tidak memiliki cukup hak akses');
        });
    }
    public function index() {
        $articles = Article::all();
        return view('manage',['articles' => $articles]);
    }

    public function add() {
        return view ('addarticle');
    }

    public function create(Request $request) {
        if($request->file('image')) {
            $image_name = $request->file('image')->store('images', 'public');
        }
        Article:: create ([
            'title' => $request->title,
            'content' => $request->content,
            'link' => $request->link,
            'image' => $image_name,
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
        if($articles->image && file_exists(storage_path('app/public/' . $articles->image)))
        {
            \Storage::delete('public/'.$articles->image);
        }
        $image_name = $request->file('image')->store('images', 'public');
        $articles->image = $image_name;
        $articles->save();
        return redirect ('/manage');
    }

    public function delete ($id) {
        $articles = Article::find($id);
        $articles->delete();
        return redirect ('/manage');
    
    }
    public function cetak_pdf() {
        $articles = Article::all();
        $pdf = PDF::loadview('articles_pdf',['articles'=>$articles]);
        return $pdf->stream();
    }
}