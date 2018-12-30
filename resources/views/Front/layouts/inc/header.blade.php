<header>
    <div class="container">
        <div class="row top-header align-items-center">
            <div class="col-sm d-none d-md-block">
                <ul class="social-nav">
                    <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                </ul>
            </div>
            <div class="col-sm col-branding">
                <a href="{{ url('homepage') }}"><img src="{{ url('assets/img/logo.png') }}" alt=""></a>
            </div>
            <div class="col-sm d-none d-md-block">
                @if(auth()->check())                
                <ul class="top-right-nav d-flex justify-content-end">
                    <li class="user-menu">
                    <?php
                        $currentuser = App\Models\User::where('id', auth()->check())->first();
                    ?>
                    <?php
                        if(!empty($currentuser->profile_pic))
                            $files = Storage::files($currentuser->profile_pic);
                    ?>
                        <a href="" class="user-identy">
                        <img class="user" src="@if(!empty($currentuser->profile_pic) && !empty($files)) {{ url('storage/'.$files[0]) }} @else {{ url('assets/img/profile-pic.png') }} @endif" alt="">
                            <span class="name">{{ $currentuser->username }}</span>
                            <i class="fa fa-angle-down"></i>
                        </a>

                        <ul class="user-menu-submenu">
                            <li><a href="{{ url('account/myaccount') }}">My Account</a></li>
                            <li><a href="{{ url('profile/masterbook') }}">GInI Applied Innovation Master Book®</a></li>
                            <li><a href="{{ url('profile/billing') }}">Billing Account</a></li>
                            <li><a href="{{ url('profile/cert_status') }}">Certification Status</a></li>
                            <li><a href="{{ url('profile/apply_exam') }}">Apply for Certifications</a></li>
                            <li><a href="{{ url('profile/download') }}">Download Center</a></li>
                            <div class="clearfix"></div>
                            <li><a href="{{ url('profile/submit_blog') }}">Submit a Blog</a></li>
                            <li><a href="{{ url('contactus') }}">Contact GInI</a></li>
                            <li><a href="{{ url('signout') }}">Logout</a></li>
                        </ul>
                    </li>
                </ul>
                @else
                <ul class="top-right-nav d-flex justify-content-end">
                    <li><a data-fancybox data-src="#registeration-popup" href="javascript:;">Register |</a></li>
                    <li><a data-fancybox data-src="#login-popup" href="javascript:;">Login</a></li>
                    <li><a data-fancybox data-src="#content-div" href="javascript:;"><i class="fa fa-search"></i></a></li>
                </ul>
                @endif
            </div>
        </div>
        <nav class="navbar navbar-expand-lg navbar-custom p-0">
            <button class="navbar-toggler navbar-light ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/homepage') }}" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="sr-only">(current)</span>
                            GInI
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ url('account/single') }}">About Us</a>
                            <a class="dropdown-item" href="{{ url('account/single') }}">Board of Advisors</a>
                            <a class="dropdown-item" href="{{ url('account/single') }}">GInI Code of Values</a>
                            <a class="dropdown-item" href="{{ url('account/single') }}">GInI Brand</a>
                            <a class="dropdown-item" href="{{ url('account/single') }}">GInI Oath</a>
                        </div>
                    </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/account/membership') }}">Membership</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/account/certification') }}">Certification</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/center/accreditation') }}">Accreditation Center</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/center/authorized') }}">Authorized Entities</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/center/verification') }}">Verification Center</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/center/knowledge') }}">Knowledge Center</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/account/downloadcenter') }}">Download Center</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/blog') }}">Blogs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/faq') }}">FAQs</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/contactus') }}">Contact Us</a> </li>
                    <li class="nav-item"> <a class="nav-link" href="{{ url('/shop') }}"><i class="fa fa-shopping-cart"></i> Shop</a> </li>
                </ul>
                <ul class="top-right-nav show-m">
                    <li><a data-fancybox data-src="#registeration-popup" href="javascript:;">Register</a></li>
                    <li><a href="#">Login</a></li>
                    <li><a data-fancybox data-src="#content-div" href="javascript:;"><i class="fa fa-search"></i></a></li>
                </ul>
            </div>
        </nav>
    </div>
</header>