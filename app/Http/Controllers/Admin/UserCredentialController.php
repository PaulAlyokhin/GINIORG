<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\UserCredentials;
use App\Models\User;
use App\Models\Country;

class UserCredentialController extends Controller
{
    //
    public function __construct(){

    }

    public function getCredentials(){
        $data['title'] = 'All Credential Applications';
        $data['credentials'] = UserCredentials::all();
        foreach($data['credentials'] as &$credential){
            $user = User::where('id', $credential->user_id)->first();
            $credential->user_id = $user->username;
            $country = Country::where('code', $credential->country_code)->first();
            $credential->country_code = $country->asciiname;
        }
        return view('Admin.credential.list', $data);
    }
}
