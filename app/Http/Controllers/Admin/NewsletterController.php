<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NewsletterController extends Controller
{
    //
    public function __construct(){

    }

    public function getNewsletters(){
        $data['title'] = 'All Newsletters';
        return view('Admin.newsletter.list', $data);
    }
}

