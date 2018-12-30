<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Users;
use App\Models\Events;
use App\Models\Media;
use App\Models\Services;

class DashboardController extends Controller
{
    //Construct
    public function __construct()
	{
	}

    public function dashboard(){
        if(!auth()->check())
            return redirect('login');
        return view('Admin.dashboard');
    }

    public function index(){
        if(!auth()->check())
            return redirect('login');
        return view('Admin.dashboard');
    }
}