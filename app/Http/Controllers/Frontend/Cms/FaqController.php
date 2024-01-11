<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Faq;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqController extends Controller {
    public function index() {
        $faqs = Faq::get();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.faq', ['title' => $title, 'faqs' => $faqs]);
    } 
}
