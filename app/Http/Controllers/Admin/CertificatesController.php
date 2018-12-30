<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Certificates;
use App\Models\UserCertificates;
use App\Models\User;
use App\Models\Role;
use App\Models\Status;
use App\Models\Activity;
use App\Models\IDU_Applications;
use PDF;

class CertificatesController extends Controller
{
    //
    public function __construct(){

    }

    public function Manage_certificates(){
        $data['title'] = 'CREATE / MANAGE CERTIFICATES';
        return view('Admin.certificates.manage_list');
    }

    public function Assign_certificates(){
        $data['title'] = 'ASSIGN CERTIFICATES';
        $data['users'] = User::where('role','!=', 4)->get();
        $data['certificates'] = Certificates::all();
        $data['user_types'] = Role::where('slug', '!=', 'administrator')->get();
        $data['status'] = Status::all();
        return view('Admin.certificates.assign_list', $data);
    }

    public function getApplications(){
        $data['title'] = 'IDU Applications';
        $data['users'] = User::where('role','!=', 4)->get();
        $data['certificates'] = Certificates::all();
        $data['activities'] = Activity::all();
        return view('Admin.certificates.idu_list', $data);
    }

    public function getAllCertificates(){
        $certificates = Certificates::all();
        return $certificates;
    }

    public function getUserCertificates(){
        $certificates = UserCertificates::all();
        foreach($certificates as &$certificate){
            $cert_user = User::where('id', $certificate->user_id)->first();
            $certificate->name = $cert_user->username;
            $user_type = Role::where('id', $certificate->user_type)->first();
            $certificate->user_type = $user_type->role_name;
            $cert_type = Certificates::where('id', $certificate->certificate_type)->first();
            $certificate->certificate_type = $cert_type->certificate_name;
        }
        return $certificates;
    }

    public function getPersonalAssigns($id){
        $certificates = UserCertificates::where('user_id', $id)->get();
        foreach($certificates as &$certificate){
            $cert_user = User::where('id', $certificate->user_id)->first();
            $certificate->name = $cert_user->username;
            $user_type = Role::where('id', $certificate->user_type)->first();
            $certificate->user_type = $user_type->role_name;
            $cert_type = Certificates::where('id', $certificate->certificate_type)->first();
            $certificate->certificate_type = $cert_type->certificate_name;
        }
        return $certificates;
    }

    public function getAllApplications(){
        $applications = IDU_Applications::all();
        foreach($applications as &$app){
            $user = User::where('id', $app->user_id)->first();
            $app->name = $user->username;
            $certificate = Certificates::where('id', $app->certificate_type)->first();
            $app->certificate_type = $certificate->certificate_name;
            $activity = Activity::where('id', $app->activity_type)->first();
            $app->activity_type = $activity->activity_name;
        }
        return $applications;
    }

    public function getApplication(Request $request){
        $application = IDU_Applications::where('id', $request->id)->first();
        $user = User::where('id', $application->user_id)->first();
        $application->name = $user->username;
        $certificate = Certificates::where('id', $application->certificate_type)->first();
        $application->certificate_type = $certificate->certificate_name;
        $activity = Activity::where('id', $application->activity_type)->first();
        $application->activity_type = $activity->activity_name;
        return $application;
    }

    public function Create_IDU_Application(Request $request){
        $request->validate([
            'username' => 'required',
            'certificate_type' => 'required',
            'activity_type' => 'required',
            'activity_title' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
        ]);
        $cert_user = User::where('username', $request->username)->first();
        $new_app = new IDU_Applications();
        $new_app->user_id = $cert_user->id;
        $new_app->certificate_type = $request->certificate_type;
        $new_app->activity_type = $request->activity_type;
        $new_app->title = $request->activity_title;
        $new_app->description = $request->activity_description;
        $new_app->start_date = $request->start_date;
        $new_app->end_date = $request->end_date;
        $new_app->document = $request->document;
        $new_app->IDUs_claimed = $request->IDUs_claimed;
        $new_app->save();
        return back();
    }

    public function assignNewCertificate(Request $request){
        $request->validate([
            'user_type' => 'required',
            'username' => 'required',
            'membership_id' => 'required',
            'certificate_type' => 'required',
            'certificate_number' => 'required',
            'issue_date' => 'required',
            'expiry_date' => 'required',
        ]);
        $new_cert = new UserCertificates();
        $cert_user = User::where('username', $request->username)->first();
        $new_cert->user_type = $request->user_type;
        $new_cert->user_id = $cert_user->id;
        $new_cert->membership_id = $request->membership_id;
        $new_cert->certificate_type = $request->certificate_type;
        $new_cert->certificate_number = $request->certificate_number;
        $new_cert->issue_date = $request->issue_date;
        $new_cert->expiry_date = $request->expiry_date;
        //return $new_cert;
        $new_cert->save();
        return back();
    }

    public function postNewCertificate(Request $request){
        $request->validate([
            'certificate_name' => 'required',
            'acronym' => 'required',
            'code' => 'required',
            'validity' => 'required',
        ]);
        $new_cert = new Certificates();
        $new_cert->certificate_name = $request->certificate_name;
        $new_cert->acronym = $request->acronym;
        $new_cert->code = $request->code;
        $new_cert->validity = $request->validity;
        $new_cert->IDU_num = $request->IDU_num;
        $new_cert->save();
        return back();
    }

    public function getCertificate(Request $request){
        $cert = Certificates::where('id', $request->id)->first();
        return $cert;
    }

    public function EditCertificate(Request $request){
        $request->validate([
            'certificate_name' => 'required',
            'acronym' => 'required',
            'code' => 'required',
            'validity' => 'required',
        ]);
        $currentcert = Certificates::where('id', $request->cert_id)->first();
        $currentcert->certificate_name = $request->certificate_name;
        $currentcert->acronym = $request->acronym;
        $currentcert->code = $request->code;
        $currentcert->validity = $request->validity;
        $currentcert->IDU_num = $request->IDU_num;
        $currentcert->save();
        return back();
    }

    public function DeleteCertificate($id){
        $currentcert = Certificates::where('id', $id)->first();
        $currentcert->delete();
        return back();
    }

    public function getProduceList(){
        $data['title'] = 'Produce Certificates';

        return view('Admin/certificates/produce_list', $data);
    }
    public function producePDF($id){
        $currentcert = UserCertificates::where('id', $id)->first();
        $cert_user = User::where('id', $currentcert->user_id)->first();
        $certificate = Certificates::where('id', $currentcert->certificate_type)->first();
        $data['chair'] = 'Testing';
        $data['cert_name'] = $cert_user->cert_name;
        $data['Executive'] = 'Testing';
        $data['cert_number'] = $currentcert->certificate_number;
        $data['issue_date'] = $currentcert->issue_date;
        $data['expiry_date'] = $currentcert->expiry_date;
  
        if($certificate->page == 'AInA'){
            $pdf = PDF::loadView('Admin/pdf_resource/AInA', $data);
            return $pdf->download('itsolutionstuff.pdf');
            return view('Admin/pdf_resource/AInA', $data);
        }
        if($certificate->page == 'CCInO'){
           // $pdf = PDF::loadView('Admin/pdf_resource/CCInO', $data);
            //return $pdf->download('itsolutionstuff.pdf');
            return view('Admin/pdf_resource/CCInO', $data);
        }
        if($certificate->page == 'CDTP'){
            $pdf = PDF::loadView('Admin/pdf_resource/CDTP', $data);
            return $pdf->download('itsolutionstuff.pdf');
            return view('Admin/pdf_resource/CDTP', $data);
        }
        if($certificate->page == 'CInP'){
            $pdf = PDF::loadView('Admin/pdf_resource/CInP', $data);
            return $pdf->download('itsolutionstuff.pdf');
            return view('Admin/pdf_resource/CInP', $data);
        }
        if($certificate->page == 'CInS'){
            $pdf = PDF::loadView('Admin/pdf_resource/CInS', $data);
            return $pdf->download('itsolutionstuff.pdf');
            return view('Admin/pdf_resource/CInS', $data);
        }
    }
}
