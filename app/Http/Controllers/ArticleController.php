<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function article1() {
        return view ('article.review-lenovo-thinkpad-p15s-laptop-workstation-kelas-terjangkau');
    }
    public function article2() {
        return view ('article.preview-snapdragon-662-smartphone-murah-jadi-makin-seru');
    }
    public function article3() {
        return view ('article.hands-on-samsung-galaxy-watch3-premium-kaya-fitur');
    }
    public function article4() {
        return view ('article.review-sennheiser-cx-400bt-tws');
    }
}
