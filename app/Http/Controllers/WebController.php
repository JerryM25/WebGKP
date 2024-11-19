<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WebController extends Controller
{
    public function home() {
        return view('home');
    }

    public function service() {
        return view('service');
    }

    public function product() {
        return view('product');
    }

    public function about() {
        return view('about');
    }

    public function team() {
        return view('team');
    }

    public function contact() {
        return view('contact');
    }
}
