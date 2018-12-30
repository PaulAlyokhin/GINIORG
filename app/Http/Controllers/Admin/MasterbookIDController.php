<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MasterbookIDs;
use App\Models\User;

class MasterbookIDController extends Controller
{
    //
    public function __construct(){

    }

    public function getMSBIDs(){
        $data['title'] = "Masterbook IDs";
        $data['msbids'] = MasterbookIDs::all();
        foreach($data['msbids'] as &$msbid){
            $user = User::where('id', $msbid->user_id)->first();
            $msbid->user_id = $user->cert_name;
        }
        return view('Admin.masterbookid.list', $data);
    }

    public function postNew(Request $request){
        $request->validate([
            'username' => 'required',
            'masterbook_id' => 'required',
        ]);
        $new_id = new MasterbookIDs();
        $user = User::where('cert_name', $request->username)->first();
        $new_id->user_id = $user->id;
        $new_id->masterbook_id = $request->masterbook_id;
        $new_id->save();
        return back();
    }

    public function Delete($id){
        $ids = MasterbookIDs::where('id', $id)->first();
        $ids->delete();
        return back();
    }
}
