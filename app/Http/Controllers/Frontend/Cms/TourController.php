<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Tour;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TourController extends Controller {
    public function step_one() {
        $step_one = Tour::whereOrder('1')->first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.tours.step_one', ['title' => $title, 'step_one' => $step_one]);
    }

    public function step_two() {
        $step_two = Tour::whereOrder('2')->first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.tours.step_two', ['title' => $title, 'step_two' => $step_two]);
    }

    public function step_three() {
        $step_three = Tour::whereOrder('3')->first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.tours.step_three', ['title' => $title, 'step_three' => $step_three]);
    }

    public function video() {
        $video = Tour::whereOrder('4')->first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.tours.video', ['title' => $title, 'video' => $video]);
    }
}
