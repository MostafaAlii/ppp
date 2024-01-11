<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Offer;
use App\Http\Controllers\Controller;
use App\Models\Button;
use Illuminate\Http\Request;

class OfferController extends Controller {
    public function index() {
        $offers = Offer::get();
        $btn = Button::whereType('offer_contact')->first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.offer', ['title' => $title, 'offers' => $offers, 'btn' => $btn]);
    } 
}
