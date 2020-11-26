<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class AboutController extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function __invoke() {
        return view ('about');
    }
    
}
