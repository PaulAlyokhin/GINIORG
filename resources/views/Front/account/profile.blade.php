@extends('Front.layouts.master')
@section('after_style')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/css/fileinput.css">
@endsection
@section('content')
<section class="account-profile">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-6">
                <?php
                    if(!empty($user->profile_pic))
                        $files = Storage::files($user->profile_pic);
                ?>
                <div class="profile-info d-flex align-items-center">
                    <img src="@if(!empty($user->profile_pic) && !empty($files)) {{ url('storage/'.$files[0]) }} @else {{ url('assets/img/profile-pic.png') }} @endif " alt="" width="85" class=" mr-3">
                    <div class="profile-meta d-flex flex-column">
                        <span class="name">WELCOME @if(!empty($user->first_name)){{ $user->first_name.' '.$user->last_name }} @else {{ $user->username }} @endif  </span>
                        <?php 
                        $role = App\Models\Role::where('id', $user->role)->first();
                        ?>
                        <span class="role">Registered as {{ $role->role_name }}</span>
                        <span class="user-id">ID: {{ sprintf("%06d", $user->id) }}</span>
                    </div>
                </div>
            </div>
            <div class="col-6 text-right">
                <a href="#" class="btn btn-primary">LOG OUT</a>
            </div>
        </div>
        <div class="row align-items-start">
            <div class="col-3 bg-white px-0 account-menu">
                <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                    <a class="nav-link @if($title== 'Profile') active @endif" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true"><i class="icofont-ui-user"></i> Profile</a>
                    <a class="nav-link @if($title== 'Billing') active @endif" id="v-pills-billing-tab" data-toggle="pill" href="#v-pills-billing" role="tab" aria-controls="v-pills-billing" aria-selected="false"><i class="icofont-credit-card"></i> Billing</a>
                    <a class="nav-link @if($title== 'Account Settings') active @endif" id="v-pills-account-settings-tab" data-toggle="pill" href="#v-pills-account-settings" role="tab" aria-controls="v-pills-account-settings" aria-selected="false"><i class="icofont-gear"></i> Account Settings</a>
                    <a class="nav-link @if($title== 'Certification Status') active @endif" id="v-pills-certification-tab" data-toggle="pill" href="#v-pills-certification" role="tab" aria-controls="v-pills-certification" aria-selected="false"><i class="icofont-badge"></i> Certification Status</a>
                    <a class="nav-link @if($title== 'Download Center') active @endif" id="v-pills-download-tab" data-toggle="pill" href="#v-pills-download" role="tab" aria-controls="v-pills-download" aria-selected="false"><i class="icofont-download"></i> Download Center</a>
                    <a class="nav-link @if($title== 'Apply for Certifications') active @endif" id="v-pills-apply-for-certifications-tab" data-toggle="pill" href="#v-pills-apply-for-certifications" role="tab" aria-controls="v--pills-apply-for-certifications" aria-selected="false"><i class="icofont-certificate-alt-1"></i> Apply for Certifications</a>
                    <a class="nav-link @if($title== 'Submit Blogs') active @endif" id="v-pills-submit-blog-tab" data-toggle="pill" href="#v-pills-submit-blog" role="tab" aria-controls="v-pills-submit-blog" aria-selected="false"><i class="icofont-file-alt"></i> Submit Blogs</a>
                </div>
            </div>
            <div class="col-9 py-3 bg-white account-form">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade  @if($title== 'Profile') show active billing p-lg-4 @endif" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link @if($subtitle == 'Personal Data') active @endif" id="pills-personal-data-tab" data-toggle="pill" href="#pills-personal-data" role="tab" aria-controls="pills-personal-data" aria-selected="true">Personal Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($subtitle == 'Education') active @endif" id="pills-profile-photo-tab" data-toggle="pill" href="#pills-profile-photo" role="tab" aria-controls="pills-profile-photo" aria-selected="false">Education</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($subtitle == 'Working Experience') active @endif" id="pills-working-tab" data-toggle="pill" href="#pills-working" role="tab" aria-controls="pills-working" aria-selected="false">Working Experience</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($subtitle == 'Book Serial') active @endif" id="pills-book-serial-tab" data-toggle="pill" href="#pills-book-serial" role="tab" aria-controls="pills-book-serial" aria-selected="false">Book Serial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link @if($subtitle == 'Passed Certifications') active @endif" id="pills-certifications-tab" data-toggle="pill" href="#pills-certifications" role="tab" aria-controls="pills-certifications" aria-selected="false">Passed Certifications</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade @if($subtitle == 'Personal Data') show active @endif" id="pills-personal-data" role="tabpanel" aria-labelledby="pills-personal-data-tab">
                                <form action="{{ url('account/updateProfile') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <label for="">First Name *</label>
                                            <input type="text" class="form-control" name="first_name" placeholder="First Name" value="{{ $user->first_name }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Middle Name *</label>
                                            <input type="text" class="form-control" name="middle_name" placeholder="Middle Name" value="{{ $user->middle_name }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Last Name *</label>
                                            <input type="text" class="form-control" name="last_name" placeholder="Last Name" value="{{ $user->last_name }}" required>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Date of Birth*</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-3" name="birthdate" placeholder="Date of Birth" value="">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Address Line 1*</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-3" name="address_1" placeholder="Street Adress" value="{{ $user->address_1 }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <label for="">Address Line 2</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="address_2" placeholder="Apartment, suite, unit etc." value="{{ $user->address_2 }}" >
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mt-negative">
                                            <label for="">Title / Role</label>
                                            <input type="text" class="form-control" name="title"  value="{{ $user->title }}" placeholder="Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="">Town/City*</label>
                                            <select class="custom-select form-control" name="city_id" value="{{ $user->city_id }}">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  mt-negative">
                                            <label for="">Company Name</label>
                                            <input type="text" class="form-control" name="company_name" value="{{ $user->company_name }}" placeholder="Your Company Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">State*</label>
                                            <select class="custom-select form-control" name="state_id"  value="{{ $user->state_id }}">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="">Country*</label>
                                            <select class="form-control form-country" name="country_code"  value="{{ $user->country_code }}" >
                                                @foreach($countries as $country)
                                                <option value="{{ $country->code }}">{{ $country->asciiname }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  mt-negative">
                                            <label for="">Contact Info*</label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" name="email" placeholder="Email Address" value="{{ $user->email }}" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="mobile" id="mobile" placeholder="Mobile Phone" value="{{ $user->mobile }}" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" name="phone1" value="{{ $user->phone1 }}" placeholder="Phone Number" required>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Postcode/Zip*</label>
                                                <input type="text" class="form-control" name="postalcode" placeholder="Postcode/Zip" value="{{ $user->postalcode }}">
                                            </div>          
                                            <div class="form-group">
                                                <label for="">Name on Certification</label>
                                                <input type="text" class="form-control" name="cert_name" placeholder="Name on Certification" value="{{ $user->cert_name }}" required>
                                            </div>          
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Upload your profile picture*</label>
                                                <input type="file" class="form-control" name="profile_pic" value="{{ $user->profile_pic }}" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Upload a soft copy of your passport *</label>
                                                <input type="file" class="form-control" name="passport" value="{{ $user->passport }}">
                                            </div>         
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary d-block ml-lg-auto">Apply Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade @if($subtitle == 'Education') show active @endif" id="pills-profile-photo" role="tabpanel" aria-labelledby="pills-profile-photo-tab">
                                
                                <form action="{{ url('account/updateEducation') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2>Education Details</h2>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <input type="hidden" name="education_id" value="@if(isset($education->id)) {{ $education->id }} @endif"> 
                                                <label for="">Highest Degree of Education *</label>
                                                <select class="form-control" name="degree_type" value="{{ $user->profile_pic }}" required>
                                                    <option value="High School">High School</option>
                                                    <option value="Undergraduate Degree">Undergraduate Degree</option>
                                                    <option value="Associate's Degree">Associate's Degree</option>
                                                    <option value="Bachelor's Degree">Bachelor's Degree</option>
                                                    <option value="Master's Degree">Master's Degree</option>
                                                    <option value="Doctoral Degree">Doctoral Degree</option>
                                                    <option value="Professional Degree">Professional Degree</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Name of School, College, Institute or University: *</label>
                                                <input type="text" class="form-control" name="university_name" value="@if(isset($education->degree_type)){{ $education->university_name }} @endif" required>
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Program Name *</label>
                                                <input type="text" class="form-control" name="program_name" value="@if(isset($education->degree_type)){{ $education->program_name }} @endif" required>
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Year Degree was awarded</label>
                                                <select class="form-control" name="awarded_year" value="@if(isset($education->degree_type)){{ $education->awarded_year }} @endif" required>
                                                    @for($i=2018;$i>=1970;$i--)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                    @endfor
                                                </select>
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Website</label>
                                                <input type="text" class="form-control" name="website" value="@if(isset($education->degree_type)){{ $education->website }} @endif">
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Upload your Certificate</label>
                                                <input type="file" class="form-control" name="certificate" value="@if(isset($education->degree_type)) {{ $education->certificate }} @endif">
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">City *</label>
                                                <input type="text" class="form-control" name="city_id" value="@if(isset($education->degree_type)) {{ $education->city_id }} @endif">
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Country *</label>
                                                <select class="form-control" name="country_code" value="@if(isset($education->degree_type)) {{ $education->country_code }} @endif" required>
                                                    @foreach($countries as $country)
                                                    <option value="{{ $country->code }}">{{ $country->asciiname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>         
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <button type="button" class="btn btn-primary">Add More</button>
                                        <button type="submit" class="btn btn-primary">Apply Changes</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade @if($subtitle == 'Working Experience') show active @endif" id="pills-working" role="tabpanel" aria-labelledby="pills-working-tab">
                                
                                <form action="{{ url('account/updateExperience') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h2>Working Experience</h2>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <input type="hidden" name="work_id" value="@if(isset($workexp->id)) {{ $workexp->id }} @endif"> 
                                                <label for="">Position: *</label>
                                                <input type="text" class="form-control" name="position" value="@if(isset($workexp->position)) {{ $workexp->position }} @endif" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Starting Date: *</label>
                                                <input type="text" class="form-control" name="start_date" value="@if(isset($workexp->start_date)) {{ $workexp->start_date }} @endif" required>
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Ending Date: *</label>
                                                <input type="text" class="form-control" name="end_date" value="@if(isset($workexp->end_date)) {{ $workexp->end_date }} @endif" required>
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Organization Industry *</label>
                                                
                                                <select name="industry_type" class="form-control"  value="@if(isset($workexp->industry_type)) {{ $workexp->industry_type }} @endif" required>
                                                    <option value="Agriculture, Mining &amp; Construction">Agriculture, Mining &amp; Construction</option>
                                                    <option value="Community, Household &amp; Personal Services">Community, Household &amp; Personal Services</option>
                                                    <option value="Education &amp; Health Services">Education &amp; Health Services</option>
                                                    <option value="Financial Activities">Financial Activities</option>
                                                    <option value="Government">Government</option>
                                                    <option value="Information">Information</option>
                                                    <option value="Leisure &amp; Hospitality">Leisure &amp; Hospitality</option>
                                                    <option value="Manufacturing">Manufacturing</option>
                                                    <option value="Professional &amp; Business Services">Professional &amp; Business Services</option>
                                                    <option value="Trade">Trade</option>
                                                    <option value="Transportation &amp; Utilities">Transportation &amp; Utilities</option>
                                                    <option value="Other">Other</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Roles and Responsibilities: *</label>
                                                <input type="text" class="form-control" name="responsibilities" value="@if(isset($workexp->responsibilities)) {{ $workexp->responsibilities }} @endif" required>
                                            </div>           
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Organization Name *</label>
                                                <input type="text" class="form-control" name="organization_name" value="@if(isset($workexp->organization_name)) {{ $workexp->organization_name }} @endif" required>
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Organization Website *</label>
                                                <input type="text" class="form-control" name="organwebsite" value="@if(isset($workexp->organization_website)) {{ $workexp->organization_website }} @endif" required>
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Address Line 1</label>
                                                <input type="text" class="form-control" name="address_1" value="@if(isset($workexp->address_1)) {{ $workexp->address_1 }} @endif">
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Address Line 2</label>
                                                <input type="text" class="form-control" name="address_2" value="@if(isset($workexp->address_2)) {{ $workexp->address_2 }} @endif">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <div class="form-group">
                                                <label for="">Country *</label>
                                                <select class="form-control" name="working_country" value="@if(isset($workexp->country_code)) {{ $workexp->country_code }} @endif" required>
                                                    @foreach($countries as $country)
                                                    <option value="{{ $country->code }}">{{ $country->asciiname }}</option>
                                                    @endforeach
                                                </select>
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">City *</label>
                                                <input type="text" class="form-control" name="city_id" value="@if(isset($workexp->city_id)) {{ $workexp->city_id }} @endif">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Zipcode</label>
                                                <input type="text" class="form-control" name="organization_website" value="@if(isset($workexp->zipcode)) {{ $workexp->zipcode }} @endif">
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Postal Code</label>
                                                <input type="text" class="form-control" name="postal_code" value="">
                                            </div>         
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Manager Name</label>
                                                <input type="text" class="form-control" name="manager_name" value="@if(isset($workexp->manager_name)) {{ $workexp->manager_name }} @endif">
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Manager Email</label>
                                                <input type="text" class="form-control" name="manager_email" value="@if(isset($workexp->manager_email)) {{ $workexp->manager_email }} @endif">
                                            </div>         
                                        </div>
                                        <div class="form-group col-md-4">
                                            <div class="form-group">
                                                <label for="">Manager Phone</label>
                                                <input type="text" class="form-control" name="manager_phone" value="@if(isset($workexp->manager_phone)) {{ $workexp->manager_phone }} @endif">
                                            </div>         
                                        </div>
                                    </div>
                                    
                                    <div class="form-row">
                                        <button type="button" class="btn btn-primary">Add More</button>
                                        <button type="submit" class="btn btn-primary">Apply Changes</button>
                                    </div>
                                </form>
                            </div>
                            <div class="tab-pane fade @if($subtitle == 'Book Serial') show active @endif" id="pills-book-serial" role="tabpanel" aria-labelledby="pills-contact-tab">
                                <form action="{{ url('account/ApplyMasterBookID') }}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                    <h4>Add your GInI Applied Innovation Master Book ID:</h4>
                                    <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <div class="form-group">
                                                <input type="text" class="form-control" name="masterbookid" value="@if(isset($user->handbook_id)) {{ $user->handbook_id }} @endif" required>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary">Apply</button>
                                </form>
                            </div>
                            <div class="tab-pane fade @if($subtitle == 'Passed Certifications') show active @endif" id="pills-certifications" role="tabpanel" aria-labelledby="pills-certifications-tab">
                            <style>
                            th,td{
                                font-size:12px;
                            }
                            </style>
                                <table class="table">
                                    <thead class="thead-dark">
                                        <th>Certificate</th>
                                        <th>Certificate Number</th>
                                        <th>Issue Date</th>
                                        <th>Expiry Date</th>
                                        <th>Status</th>
                                    </thead>
                                    <tbody>
                                    @if(count($user_certificates) == 0)
                                        <tr><td colspan="5">There're no certificates.</td></tr>
                                    @endif
                                    @foreach($user_certificates as $cert)
                                        <tr>
                                            <td>{{ $cert->certificate_type }}</td>
                                            <td>{{ $cert->certificate_number }}</td>
                                            <td>{{ $cert->issue_date }}</td>
                                            <td>{{ $cert->expiry_date }}</td>
                                            <td>{{ $cert->status }}</td>
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade  @if($title== 'Billing') show active billing p-lg-4 @endif" id="v-pills-billing" role="tabpanel" aria-labelledby="v-pills-billing-tab">
                        <div class="row">

                            <div class="col-md-7 d-lg-flex">
                                <p class="label mr-4">CERTIFICATION</p>
                                <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="col-md-5 billing-col-right">
                                <p>RENEWAL: 15 NOV 2018 $200 </p>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <p>Total: $200</p>
                                    <p><a href="#">Download Invoice <i class="icofont-file-alt"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-7 d-lg-flex">
                                <p class="label mr-4">CERTIFICATION</p>
                                <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="col-md-5 billing-col-right">
                                <p>RENEWAL: 15 NOV 2018 $200 </p>
                            </div>
                        </div>
                        <div class="row">

                            <div class="col-md-7 d-lg-flex">
                                <p class="label mr-4">CERTIFICATION</p>
                                <p class="title">Lorem ipsum dolor sit amet consectetur.</p>
                            </div>
                            <div class="col-md-5 billing-col-right">
                                <p>RENEWAL: 15 NOV 2018 $200 </p>
                                <hr />
                                <div class="d-flex justify-content-between">
                                    <p>Total: $200</p>
                                    <p><a href="#">Download Invoice <i class="icofont-file-alt"></i></a></p>
                                </div>
                            </div>
                        </div>
                        <hr />
                        <div class="row">
                            <div class="col-lg-2">
                                <p class="label">Payment Methods</p>
                            </div>
                            <div class="col-lg-10">
                                <form action="" class="payment-methods">
                                    <div class="form-group d-md-flex mb-md-0">
                                        <div class="col-lg-2">
                                            <label for="credit-card" class="col"><i class="icofont-credit-card"></i></label>
                                        </div>
                                        <div class="col-lg-5 mb-3 mb-md-0">
                                            <input type="text" class="form-control" id="fname" placeholder="First Name" required>
                                        </div>
                                        <div class="col-lg-5">
                                            <button class="btn btn-primary">Edit Details</button>
                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex mb-md-0">
                                        <div class="col-lg-2">
                                            <label for="paypal" class="col"><i class="icofont-brand-paypal"></i></label>
                                        </div>
                                        <div class="col-lg-5 mb-3 mb-md-0">
                                            <input type="text" class="form-control" id="paypal" placeholder="example@example.com" required>
                                        </div>
                                        <div class="col-lg-5">
                                            <button class="btn btn-primary">Edit Details</button>
                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex mb-md-0">
                                        <div class="col-lg-2">
                                            <label for="boa" class="col"><i class="icofont-bank-transfer"></i></label>
                                        </div>
                                        <div class="col-lg-5 mb-3 mb-md-0">
                                            <input type="text" class="form-control mb-3" id="address" placeholder="BANK OF AMERICA" required>
                                        </div>
                                        <div class="col-lg-5">
                                            <button class="btn btn-primary">Edit Details</button>
                                        </div>
                                    </div>
                                    <div class="form-group d-md-flex">
                                        <div class="col-lg-2"></div>
                                        <div class="col-md-10 col-lg-5">
                                            <button class="btn btn-primary d-block add-payment w-100" type="button"><i class="fa fa-plus"></i> Add Payment Method</button>
                                        </div>
                                        <div class="col-5"></div>
                                    </div>
                                </form>
                                
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade @if($title== 'Account Settings') show active billing p-lg-4 @endif" id="v-pills-account-settings" role="tabpanel" aria-labelledby="v-pills-messages-tab">
                        <form action="{{ url('account/updateAccountInfo') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>Account Settings</h4>
                            <div class="form-row">
                                <div class="form-group col-md-8">
                                    <label for="">Email</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" value="@if(isset($user->email)) {{ $user->email }} @endif" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-4">
                                    <label for="">Current Password</label>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="current_pass">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">New Password</label>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="new_pass" >
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="">Confirm Password</label>
                                    <div class="form-group">
                                        <input type="password" class="form-control" name="confirm_pass">
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Apply</button>
                        </form>
                    </div>
                    <div class="tab-pane fade @if($title== 'Certification Status') show active billing p-lg-4 @endif" id="v-pills-certification" role="tabpanel" aria-labelledby="v-pills-certification-tab">
                            
                        <table class="table">
                            <thead class="thead-dark">
                                <th>Certificate</th>
                                <th>Certificate Number</th>
                                <th>Issue Date</th>
                                <th>Expiry Date</th>
                                <th>Status</th>
                            </thead>
                            <tbody>
                            @if(count($user_certificates) == 0)
                                <tr><td colspan="5">There're no certificates.</td></tr>
                            @endif
                            @foreach($user_certificates as $cert)
                                <tr>
                                    <td>{{ $cert->certificate_type }}</td>
                                    <td>{{ $cert->certificate_number }}</td>
                                    <td>{{ $cert->issue_date }}</td>
                                    <td>{{ $cert->expiry_date }}</td>
                                    <td>{{ $cert->status }}</td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade @if($title== 'Download Center') show active billing p-lg-4 @endif" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-download-tab">
                        
                        <table class="table">
                            <thead class="thead-dark">
                                <th>Certificate</th>
                                <th>Certificate Number</th>
                                <th>Download</th>
                            </thead>
                            <tbody>
                            @if(count($user_certificates) == 0)
                                <tr><td colspan="5">There're no certificates.</td></tr>
                            @endif
                            @foreach($user_certificates as $cert)
                                <tr>
                                    <td>{{ $cert->certificate_type }}</td>
                                    <td>{{ $cert->certificate_number }}</td>
                                    <td><a href="#"><i class="la la-cloud-download"></i> Download Certificate</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane fade @if($title== 'Apply for Certifications') show active billing p-lg-4 @endif" id="v-pills-apply-for-certifications" role="tabpanel" aria-labelledby="v-pills-apply-for-certifications-tab">Apply for Certifications</div>
                    <div class="tab-pane fade @if($title== 'Submit Blogs') show active billing p-lg-4 @endif" id="v-pills-submit-blog" role="tabpanel" aria-labelledby="v-pills-submit-blog-tab">
                        <form action="{{ url('blog/postNew') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <h4>Post new blog</h4>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="">Blog Type</label>
                                    <div class="form-group">
                                        <select class="form-control" name="type" value="" required>
                                            <option value="standard">Standard Blog</option>
                                            <option value="youtube">Youtube Video Blog</option>
                                            <option value="vimeo">Vimeo Video Blog</option>
                                            <option value="audio">Audio Blog</option>
                                            <option value="text">Text Blog</option>>
                                            <option value="slideshow">Slideshow Blog</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="">Email</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="email" value="@if(isset($user->email)) {{ $user->email }} @endif">
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">What for?</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="what_for" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Title</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="title" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Description</label>
                                    <div class="form-group">
                                        <textarea class="form-control" name="description" rows="5" required></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Video url</label>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="video_url">
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="">Video url</label>
                                    <div class="form-group">
                                        <input type="file" class="form-control" name="temp_file">
                                    </div>
                                </div>
                            </div>-->
                            <div class="form-row">
                                <div class="form-group col-sm-12 row">
                                    <label class="col-sm-3 control-label">
                                        Media
                                    </label>
                                    <div class="col-sm-12 multiple-fileload">
                                        <span class="btn btn-default btn-file">
                                            <input id="input-2" name="attachments[]" type="file" class="file" multiple data-show-upload="true" data-show-caption="true">
                                        </span>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-primary">Post</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
@section('after_script')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-fileinput/4.3.1/js/fileinput.js"></script>
@endsection