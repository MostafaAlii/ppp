<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Copyright;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CopyrightController extends Controller {
    public function index() {
        $copyrights = Copyright::get();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.copyright', ['title' => $title, 'copyrights' => $copyrights]);
    } 
}
