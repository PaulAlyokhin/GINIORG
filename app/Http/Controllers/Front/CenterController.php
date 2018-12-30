<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CenterController extends Controller
{
    //
    public function __construct(){

    }

    public function Accreditation(){
        return view('Front.accreditation');
    }
    public function Authorized(){
        return view('Front.authorized');
        
    }
    public function Verification(){
        return view('Front.verification');
        
    }
    public function Knowledge(){
        return view('Front.knowledge');
        
    }
}
