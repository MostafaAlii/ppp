<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Term;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TermController extends Controller {
    public function index() {
        $terms = Term::get();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.terms', ['title' => $title, 'terms' => $terms]);
    } 
}
