<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Komentar;
use App\KomentarSatu;
use App\KomentarTiga;
use Illuminate\Support\Facades\Gate;
class ArticleController extends Controller
{

    public function __construct() {
        $this->middleware('auth');
        
    }
    public function article1() {
        $komentarsatu = KomentarSatu::all();
        return view('article.preview-snapdragon-662-smartphone-murah-jadi-makin-seru', ['komentarsatu' => $komentarsatu]);
    }
    public function create1(Request $request) {
        KomentarSatu::create([
            'nama' => $request->nama,
            'komen' => $request->komen
        ]);
        return redirect('/preview-snapdragon-662-smartphone-murah-jadi-makin-seru');
    }

    public function article2() {
        $komentars = Komentar::all();
        return view('article.hands-on-samsung-galaxy-watch3-premium-kaya-fitur',['komentars' => $komentars]);
    }
    public function create2(Request $request) {
        Komentar::create([
            'nama' => $request->nama,
            'komen' => $request->komen
        ]);
        return redirect('/hands-on-samsung-galaxy-watch3-premium-kaya-fitur');
    }

    public function article3() {
        $komentartiga = KomentarTiga::all();
        return view ('article.review-sennheiser-cx-400bt-tws', ['komentartiga' => $komentartiga]);
    }
    public function create3(Request $request) {
        KomentarTiga::create([
            'nama' => $request->nama,
            'komen' => $request->komen
        ]);
        return redirect('/review-sennheiser-cx-400bt-tws');
    }
}
