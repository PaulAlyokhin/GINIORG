<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\FAQ;
use App\Models\Category;

class FAQController extends Controller
{
    //
    public function getList(){
        $data['categories'] = Category::all();
        return view('Front.faq', $data);
    }
}
