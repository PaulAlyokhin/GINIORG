@extends('Front.layouts.master')
@section('content')
<section class="account-profile">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="col-6">
                <div class="profile-info d-flex align-items-center">
                    <img src="{{ url('assets/img/profile-pic.png') }}" alt="" width="85" class=" mr-3">
                    <div class="profile-meta d-flex flex-column">
                        <span class="name">WELCOME JOHN DOE</span>
                        <span class="role">Registered as Professional</span>
                        <span class="user-id">ID: 987654</span>
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
                    <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="true"><i class="icofont-ui-user"></i> Profile</a>
                    <a class="nav-link" id="v-pills-billing-tab" data-toggle="pill" href="#v-pills-billing" role="tab" aria-controls="v-pills-billing" aria-selected="false"><i class="icofont-credit-card"></i> Billing</a>
                    <a class="nav-link" id="v-pills-account-settings-tab" data-toggle="pill" href="#v-pills-account-settings" role="tab" aria-controls="v-pills-account-settings" aria-selected="false"><i class="icofont-gear"></i> Account Settings</a>
                    <a class="nav-link" id="v-pills-certification-tab" data-toggle="pill" href="#v-pills-certification" role="tab" aria-controls="v-pills-certification" aria-selected="false"><i class="icofont-badge"></i> Certification Status</a>
                    <a class="nav-link active" id="v-pills-download-tab" data-toggle="pill" href="#v-pills-download" role="tab" aria-controls="v-pills-download" aria-selected="false"><i class="icofont-download"></i> Download Center</a>
                    <a class="nav-link" id="v-pills-apply-for-certifications-tab" data-toggle="pill" href="#v-pills-apply-for-certifications" role="tab" aria-controls="v--pills-apply-for-certifications" aria-selected="false"><i class="icofont-certificate-alt-1"></i> Apply for Certifications</a>
                    <a class="nav-link" id="v-pills-submit-blog-tab" data-toggle="pill" href="#v-pills-submit-blog" role="tab" aria-controls="v-pills-submit-blog" aria-selected="false"><i class="icofont-file-alt"></i> Submit Blogs</a>
                </div>
            </div>
            <div class="col-9 py-3 bg-white account-form">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="pills-personal-data-tab" data-toggle="pill" href="#pills-personal-data" role="tab" aria-controls="pills-personal-data" aria-selected="true">Personal Data</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link btn btn-default" id="pills-profile-photo-tab" data-toggle="pill" href="#pills-profile-photo" role="tab" aria-controls="pills-profile-photo" aria-selected="false">Profile Photo</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-book-serial-tab" data-toggle="pill" href="#pills-book-serial" role="tab" aria-controls="pills-book-serial" aria-selected="false">Book Serial</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="pills-certifications-tab" data-toggle="pill" href="#pills-certifications" role="tab" aria-controls="pills-certifications" aria-selected="false">Passed Certifications</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-personal-data" role="tabpanel" aria-labelledby="pills-personal-data-tab">
                                <form>
                                    <div class="form-row">
                                        <div class="form-group col-md-3">
                                            <label for="fname">First Name *</label>
                                            <input type="text" class="form-control" id="fname" placeholder="First Name" required>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="lname">Last Name *</label>
                                            <input type="text" class="form-control" id="lname" placeholder="Last Name" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="address">Address *</label>
                                            <div class="form-group">
                                                <input type="text" class="form-control mb-3" id="address" placeholder="Street Adress" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="text" class="form-control" id="address" placeholder="Apartment, suite, unit etc." required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6 mt-negative">
                                            <label for="role">Title / Role</label>
                                            <input type="text" class="form-control" id="role" placeholder="Title">
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="city">Town/City*</label>
                                            <select class="custom-select form-control" name="cities[]" multiple="multiple">
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  mt-negative">
                                            <label for="cname">Company Name</label>
                                            <input type="text" class="form-control" id="cname" placeholder="Your Company Name">
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="states">State*</label>
                                            <select class="custom-select form-control" name="states[]" multiple="multiple" required>
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="country">Country*</label>
                                            <select class="custom-select form-control form-country" name="countries[]" multiple="multiple" required>
                                                <option value="AL">Alabama</option>
                                                <option value="WY">Wyoming</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6  mt-negative">
                                            <label for="email">Contact Info*</label>
                                            <div class="form-group">
                                                <input type="email" class="form-control" id="email" placeholder="Email Address" required>
                                            </div>
                                            <div class="form-group">
                                                <input type="tel" class="form-control" id="phone" placeholder="Phone Number" required>
                                            </div>

                                        </div>
                                        <div class="form-group col-md-3">
                                            <label for="states">Postcode/Zip*</label>
                                            <input type="tel" class="form-control" id="phone" placeholder="Postcode/Zip" required>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-primary d-block ml-lg-auto">Apply Changes</button>
                                </form>
                            </div>
                            <div class="tab-pane fade" id="pills-profile-photo" role="tabpanel" aria-labelledby="pills-profile-photo-tab">Profile Photo</div>
                            <div class="tab-pane fade" id="pills-book-serial" role="tabpanel" aria-labelledby="pills-contact-tab">Book Serial</div>
                            <div class="tab-pane fade" id="pills-certifications" role="tabpanel" aria-labelledby="pills-certifications-tab">Passed Certifications</div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="v-pills-billing" role="tabpanel" aria-labelledby="v-pills-billing-tab">
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
                    <div class="tab-pane fade" id="v-pills-account-settings" role="tabpanel" aria-labelledby="v-pills-messages-tab">Account Settings</div>
                    <div class="tab-pane fade" id="v-pills-certification" role="tabpanel" aria-labelledby="v-pills-certification-tab">Certification</div>
                    <div class="tab-pane fade show active billing p-lg-4" id="v-pills-download" role="tabpanel" aria-labelledby="v-pills-download-tab">Download</div>
                    <div class="tab-pane fade" id="v-pills-apply-for-certifications" role="tabpanel" aria-labelledby="v-pills-apply-for-certifications-tab">Apply for Certifications</div>
                    <div class="tab-pane fade" id="v-pills-submit-blog" role="tabpanel" aria-labelledby="v-pills-submit-blog-tab">Submit Blog</div>
                </div>
            </div>
        </div>
    </div>

</section>
@endsection
