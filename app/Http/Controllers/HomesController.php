<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Gate;
class HomesController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function __invoke() {
        Cache::remember('articles', 10, function(){
            return Article::all();
        });
            $articles = Cache::get('articles');
            return view('homes')->with(compact('articles'));
    }
    
}