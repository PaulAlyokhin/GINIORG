<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Status;
use App\Models\Role;
use App\Models\Country;

class UserController extends Controller
{
    //
    public function __construct(){

    }

    public function Signout(){
        Auth::logout();
        return redirect('/admin/dashboard');
    }

    public function getUsersList(){
        $data['users'] = User::all();
        $data['title'] = 'Users Settings';
        $data['roles'] = Role::all();
        $data['status'] = Status::all();
        $data['countries'] = Country::all();
        return view('Admin.user.list', $data);
    }

    public function postNewUser(Request $request){
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'birth_day' => 'required',
            'birth_mon' => 'required',
            'birth_year' => 'required',
            'cert_name' => 'required',
            'address_1' => 'required',
            'country_code' => 'required',
            'mobile' => 'required',
            'title' => 'required',
        ]);
        $new_user = new User();
        $new_user->title = $request->title;
        $new_user->username = $request->title;
        $new_user->first_name = $request->first_name;
        $new_user->middle_name = $request->middle_name;
        $new_user->last_name = $request->last_name;
        $new_user->email = $request->email;
        $new_user->birth_day = $request->birth_day;
        $new_user->birth_mon = $request->birth_mon;
        $new_user->birth_year = $request->birth_year;
        $new_user->cert_name = $request->cert_name;
        $new_user->address_1 = $request->address_1;
        $new_user->address_2 = $request->address_2;
        $new_user->mobile = $request->mobile;
        $new_user->phone1 = $request->phone1;
        $new_user->country_code = $request->country_code;
        $new_user->phone2 = $request->phone2;
        $new_user->zipcode = $request->zipcode;
        $new_user->postalcode = $request->postalcode;
        $new_user->save();
        return back();
    }

    public function getUserInfo(Request $request){
        $user = User::where('id', $request->id)->first();
        return $user;
    }

    public function EditUserInfo(Request $request){
       // return $request;
        $request->validate([
            'email' => 'required',
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'birth_day' => 'required',
            'birth_mon' => 'required',
            'birth_year' => 'required',
            'cert_name' => 'required',
            'address_1' => 'required',
            'country_code' => 'required',
            'mobile' => 'required',
            'title' => 'required',
        ]);
        $new_user = User::where('id', $request->user_id)->first();
        $new_user->title = $request->title;
        $new_user->username = $request->title;
        $new_user->first_name = $request->first_name;
        $new_user->middle_name = $request->middle_name;
        $new_user->last_name = $request->last_name;
        $new_user->email = $request->email;
        $new_user->birth_day = $request->birth_day;
        $new_user->birth_mon = $request->birth_mon;
        $new_user->birth_year = $request->birth_year;
        $new_user->cert_name = $request->cert_name;
        $new_user->address_1 = $request->address_1;
        $new_user->address_2 = $request->address_2;
        $new_user->mobile = $request->mobile;
        $new_user->phone1 = $request->phone1;
        $new_user->country_code = $request->country_code;
        $new_user->phone2 = $request->phone2;
        $new_user->zipcode = $request->zipcode;
        $new_user->postalcode = $request->postalcode;
        $new_user->save();
        return back();
    }
    public function UdateStatus($id){

    }
    public function DeleteUser($id){
        
    }
}
