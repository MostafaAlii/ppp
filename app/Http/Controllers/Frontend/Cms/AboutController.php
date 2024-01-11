<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\AboutUs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller {
    public function index() {
        $abouts = AboutUs::get();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.about', ['title' => $title, 'abouts' => $abouts]);
    } 
}
