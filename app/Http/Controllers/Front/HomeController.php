<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    //
    public function index()
    {
    	return view('Front.index');
    }
    public function FAQ()
    {
    	return view('Front.faq');
    }
    public function Shop()
    {
    	return view('Front.shop');
    }
    public function Contactus()
    {
    	return view('Front.contact');
    }
}
