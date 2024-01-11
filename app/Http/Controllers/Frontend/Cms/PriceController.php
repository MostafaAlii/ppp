<?php

namespace App\Http\Controllers\Frontend\Cms;

use App\Models\Price;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class PriceController extends Controller {
    public function index() {
        $prices = Price::with(['advantages', 'gallary'])->get()->toArray();
        return view('website.pages.price', ['prices' => $prices]);
    }
}