<?php

namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }

    public function about_us()
    {
        return view('pages.sub_pages.about');
    }

    public function achievements()
    {
        return view('pages.sub_pages.achievements');
    }

    public function news_details()
    {
        return view('pages.sub_pages.news_detail');
    }

    public function gallery()
    {
        return view('pages.sub_pages.gallery');
    }

    public function postContact()
    {

        $data = request()->validate([
            'name' => 'required|min:3',
            'email' => 'required|email',
            'phone' => 'required',
            'message' => 'required|min:20',
        ]);

        Mail::to('satellite4digitalhealth@gmail.com')->send(new ContactFormMail($data));
        return redirect('/#appointment')->with('message', 'Thanks for your message. We will be in touch.');
    }
}
