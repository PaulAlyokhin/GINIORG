<!------------ Footer Start ---------------->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-mg-6 col-lg-8"> <a href="{{ url('/homepage') }}"><img src="{{ url('assets/img/logo-footer.png') }}" alt="" class="logo-footer mr-3"> </a><span class="footer-address">Grand Rapids, MI 49503 USA | +1 877 276 7701 | GInI@GInI.org</span> <span><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></span> </div>
                <div class="col-mg-6 col-lg-4">
                    <h4 class="newsletter-title">Subscribe to GInI’s Newsletter</h4>
                    <form action="" class="newsletter-footer">
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Enter Email Address">
                            <button class="btn btn-primary">SUBSCRIBE</button>
                        </div>
                    </form>
                    <p>Sign up to get interesting Innovation news and updates
                        delivered to your inbox.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-sm">
                    <p>© 2018 GLOBAL INNOVATION INSTITUTE (GInI)</p>
                </div>
                <div class="col-sm">
                    <ul class="menu-footer">
                        <li><a href="#">Terms of Use |</a></li>
                        <li><a href="#">Privacy Policy |</a></li>
                        <li><a href="#">Refunt Policy |</a></li>
                        <li><a href="#">Copyright Info |</a></li>
                        <li><a href="contact.php">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<!------------ Footer End ---------------->

<!------------ Floating Social Nav Start ---------------->

<ul class="fixed-social nav">
    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
    <li class="nav-item"><a class="nav-link" data-fancybox data-src="#newsletter-popup" href="javascript:;"><i class="fa fa-envelope"></i></a></li>
</ul>

<!------------ Floating Social Nav End ---------------->

<!------------ Registeration Popup Start ---------------->
<div style="display: none">
    <div id="registeration-popup">
        <div class="register-form">
            <div class="register-form-header">
                <img src="{{ url('assets/img/logo.png') }}" alt="">
                <h1 class="title">Register</h1>
            </div>
            <form action="">
                <div class="row form-block">
                    <div class="col-sm-6 pl-sm-0">
                        <div class="form-group email">
                            <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter">
                        </div>
                        <div class="form-group mb-4 password">
                            <input type="password" class="form-control" name="password" placeholder="Password">
                        </div>
                        <div class="go-login"><a href="#">Already Register</a></div>
                    </div>
                    <div class="col-sm-6 pr-sm-0 text-right">
                        <div class="form-divider">OR</div>
                        <a class="btn btn-form btn-linkedin" href="#"><i class="fa fa-linkedin"></i> Sign Up with Linkedin</a>
                        <a class="btn btn-form btn-twitter" href="#"><i class="fa fa-twitter"></i> Sign Up with Twitter</a>
                        <a class="btn btn-form btn-g-plus" href="#"><i class="fa fa-google"></i> Sign Up with Google</a>
                    </div>
                </div>
                <div class="row form-block1">
                    <div class="col-sm-6">
                        <div class="google-captcha"><img src="https://developers.google.com/recaptcha/images/newCaptchaAnchor.gif" alt="" class="w-100"></div>
                    </div>
                    <div class="col-sm-6 text-right">
                        <button type="submit" class="btn btn-primary btn-form">SIGN UP</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>


<!------------ Registeration Popup End ---------------->


<!------------ Search Popup Start ---------------->
<div style="display: none">
    <div id="content-div">
        <div class="s010">
            <form>
                <div class="inner-form">
                    <div class="basic-search">
                        <div class="input-field">
                            <input id="search" type="text" placeholder="Type Keywords" />
                            <div class="icon-wrap">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                    <path d="M15.5 14h-.79l-.28-.27C15.41 12.59 16 11.11 16 9.5 16 5.91 13.09 3 9.5 3S3 5.91 3 9.5 5.91 16 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5 14 7.01 14 9.5 11.99 14 9.5 14z"></path>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!------------ Search popup End ---------------->

<!------------ Login Popup Start -->

<div style="display:none;">
    <div id="login-popup">
        <div class="register-form login">
            <div class="form-header">
                <h5 class="title">CRAETE NEW ACCOUNT</h5>
                <img src="{{ url('assets/img/login-logo.png') }}" alt="">
                <h1 class="form-title">LOG IN TO YOUR ACCOUNT</h1>

            </div>
            <form action="{{ url('login') }}" method="POST">
                @csrf
                <input type="hidden" name="logintype" value="front"/>
                <div class="form-group email">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Username or Email">
                </div>
                <div class="form-group password">
                    <input type="password" class="form-control" name="password" placeholder="Password">
                    <button type="submit" class="btn-submit"><i class="fa fa-arrow-right"></i></button>
                </div>
                <p class="forgot-pass"><a href="#">Forgot Password</a></p>
            </form>
        </div>
    </div>
</div>


<!------------ Login Popup End ----------->


<!------------ Newsletter Popup Start----------->
<div style="display:none;">
    <div id="newsletter-popup">
        <div class="register-form newsletter">
            <div class="form-header">
                <h1 class="newsletter-title">NEWSLETTER</h1>
            </div>
            <div class="news-letter-header">
                <p>Sign up for our awesome newsletter to get the latest news</p>
            </div>
            <form action="">
                <div class="form-group email">
                    <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Enter Email Address">
                </div>
                <p class="spam-messag text-center">Don't worry we hate spam too ;) </p>
                <div class="google-captcha mb-4"><img src="https://developers.google.com/recaptcha/images/newCaptchaAnchor.gif" alt="" class="w-100"></div>
                <div class="text-center">
                    <button class="btn btn-primary" type="submit">SUBSCRIBE</button>

                </div>
            </form>
        </div>
    </div>
</div>
<!------------ Newsletter Popup End ----------->
