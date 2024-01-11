<?php

namespace App\Http\Controllers\Frontend\Cms;
use App\Models\Contact;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller {
    public function index() {
        $contact = Contact::first();
        $title = 'ARTISTICRETOUCH.COM';
        return view('website.pages.contact', ['title' => $title, 'contact' => $contact]);
    } 
}
