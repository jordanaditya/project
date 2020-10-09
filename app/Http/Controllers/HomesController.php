<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Illuminate\Support\Facades\Cache;
class HomesController extends Controller
{
    public function __invoke() {
        Cache::remember('articles', 4, function(){
            return Article::all();
        });
            $articles = Cache::get('articles');
            return view('homes')->with(compact('articles'));
    }
}