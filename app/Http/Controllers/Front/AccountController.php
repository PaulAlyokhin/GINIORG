<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Country;
use App\Models\Education;
use App\Models\WorkExp;
use App\Models\UserCertificates;
use App\Models\Certificates;
use App\Models\Status;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class AccountController extends Controller
{
    //
    public function __construct(){

    }

    public function ViewProfile(){
        return view('Front.account.membership');
    }

    public function SingleView(){
        return view('Front.single');
    }

    public function ViewCertification(){
        return view('Front.account.certification');
        
    }

    public function ViewDownload(){
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['title'] = 'Download Center';
        $data['subtitle'] = '';
        $data['countries'] = Country::all();
        $data['user_certificates'] = UserCertificates::where('user_id', auth()->user()->id)->get();
        foreach($data['user_certificates'] as &$cert){
            $cert_type = Certificates::where('id', $cert->certificate_type)->first();
            $cert->certificate_type = $cert_type->certificate_name;
            $status = Status::where('id', $cert->status)->first();
            $cert->status = $status->status_name;
        }
        //return $data['user_certificates'];
        $data['education'] = Education::where('user_id', auth()->user()->id)->first();
        $data['workexp'] = WorkExp::where('user_id', auth()->user()->id)->first();
        return view('Front.account.profile', $data);
        
    }

    public function Signout(){
        Auth::logout();
        return redirect('/homepage');
    }

    public function ViewTabs($slug){
        $data['user'] = User::where('id', auth()->user()->id)->first();
        if($slug == 'masterbook'){
            $title = 'Profile';
            $subtitle = 'Book Serial';
        }
        else if($slug == 'billing'){
            $title = 'Billing';
            $subtitle = '';
        }
        else if($slug == 'cert_status'){
            $title = 'Certification Status';
            $subtitle = '';
        }
        else if($slug == 'apply_exam'){
            $title = 'Apply for Certifications';
            $subtitle = '';
        }
        else if($slug == 'download'){
            $title = 'Download Center';
            $subtitle = '';
        }
        else if($slug == 'submit_blog'){
            $title = 'Submit Blogs';
            $subtitle = '';
        }
        $data['title'] = $title;
        $data['subtitle'] = $subtitle;
        $data['countries'] = Country::all();
        $data['user_certificates'] = UserCertificates::where('user_id', auth()->user()->id)->get();
        foreach($data['user_certificates'] as &$cert){
            $cert_type = Certificates::where('id', $cert->certificate_type)->first();
            $cert->certificate_type = $cert_type->certificate_name;
            $status = Status::where('id', $cert->status)->first();
            $cert->status = $status->status_name;
        }
        //return $data['user_certificates'];
        $data['education'] = Education::where('user_id', auth()->user()->id)->first();
        $data['workexp'] = WorkExp::where('user_id', auth()->user()->id)->first();
        return view('Front.account.profile', $data);
    }

    public function MyAccount(){
        $data['user'] = User::where('id', auth()->user()->id)->first();
        $data['title'] = 'Profile';
        $data['subtitle'] = 'Personal Data';
        $data['countries'] = Country::all();
        $data['user_certificates'] = UserCertificates::where('user_id', auth()->user()->id)->get();
        foreach($data['user_certificates'] as &$cert){
            $cert_type = Certificates::where('id', $cert->certificate_type)->first();
            $cert->certificate_type = $cert_type->certificate_name;
            $status = Status::where('id', $cert->status)->first();
            $cert->status = $status->status_name;
        }
        //return $data['user_certificates'];
        $data['education'] = Education::where('user_id', auth()->user()->id)->first();
        $data['workexp'] = WorkExp::where('user_id', auth()->user()->id)->first();
        return view('Front.account.profile', $data);
    }

    public function updateAccountInfo(Request $request){
        return $request;
        $user = User::where('id', auth()->user()->id)->first();
        if(empty($request->current_pass)){
            $user->email = $request->email;
            $user->save();
        }
        else{
            $user->email = $request->email;
            if($request->new_pass != $request->confirm_pass)
                return back();
            if($user->password = Hash::make($request->current_pass)){
                $user->password = Hash::make($request->new_pass);
                $user->save();
            }
            return back();
        }
    }

    public function updateProfile(Request $request){
        $currentuser = User::where('id', auth()->user()->id)->first();
        $currentuser->first_name = $request->first_name;
        $currentuser->middle_name = $request->middle_name;
        $currentuser->last_name = $request->last_name;
        $currentuser->address_1 = $request->address_1;
        $currentuser->address_2 = $request->address_2;
        $currentuser->title = $request->title;
        $currentuser->company_name = $request->company_name;
        $currentuser->city_id = $request->city_id;
        $currentuser->state_id = $request->state_id;
        $currentuser->country_code = $request->country_code;
        $currentuser->email = $request->email;
        $currentuser->mobile = $request->mobile;
        $currentuser->phone1 = $request->phone1;
        $currentuser->postalcode = $request->postalcode;
        $currentuser->cert_name = $request->cert_name;
        $file = $request->file('profile_pic');
        if(!empty($file)){
            $destination_path = 'files/' . 'profile/'.auth()->user()->id. '/profile_pic';
            Storage::put($destination_path, $file);
            $currentuser->profile_pic = $destination_path;
        }    
        $file = $request->file('passport');
        if(!empty($file)){
            $destination_path = 'files/' . 'profile/'.auth()->user()->id. '/passport';
            Storage::put($destination_path, $file);
            $currentuser->passport = $destination_path;
        }     
        $currentuser->save();
        return back();
    }

    public function updateEducation(Request $request){
        //return $request;
        if(empty($request->education_id))
            $education = new Education();
        else
            $education = Education::where('id', $request->education_id)->first();
        $education->user_id = auth()->user()->id;
        $education->degree_type = $request->degree_type;
        $education->university_name = $request->university_name;
        $education->program_name = $request->program_name;
        $education->awarded_year = $request->awarded_year;
        $education->website = $request->website;
        $education->city_id = $request->city_id;
        $education->country_code = $request->country_code;
        $education->save();
        return back();
    }

    public function updateExperience(Request $request){
        //return $request;
        if(empty($request->work_id))
            $experience = new WorkExp();
        else
            $experience = WorkExp::where('id', $request->work_id)->first();
        $experience->user_id = auth()->user()->id;
        $experience->position = $request->position  ;
        $experience->start_date = $request->start_date;
        $experience->end_date = $request->end_date;
        $experience->industry_type = $request->industry_type;
        $experience->responsibilities = $request->responsibilities;
        $experience->organization_name = $request->organization_name;
        $experience->organization_website = $request->organwebsite;
        $experience->address_1 = $request->address_1;
        $experience->address_2 = $request->address_2;
        $experience->country_code = $request->working_country;
        $experience->city_id = $request->city_id;
        $experience->manager_name = $request->manager_name;
        $experience->manager_email = $request->manager_email;
        $experience->manager_phone = $request->manager_phone;
        $experience->save();
        return back();
    }

    public function ApplyMasterBookID(Request $request){
        //return $request;
        $user = User::where('id', auth()->user()->id)->first();
        $user->handbook_id = $request->masterbookid;
        $user->save();
        return back();
    }
}
