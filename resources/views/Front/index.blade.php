@extends('Front.layouts.master')
@section('content')
<!------------ Banner Start ---------------->
<div class="slider-container home-slider">
    <div id="carouselExampleIndicators" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div class="vid-container">
                    <div class="overlay"></div>
                    <video playsinline="playsinline" autoplay="autoplay" muted="muted" loop="loop">
                        <source src="https://storage.googleapis.com/coverr-main/mp4/Mt_Baker.mp4" type="video/mp4"> </video>
                    <div class="container h-100">
                        <div class="d-flex text-center h-100  mt-5">
                            <div class="my-auto w-100 text-white">
                                <h1 class="display-3">Video Header</h1>
                                <h2 class="mb-5">Lorem ipsum dolor sit amet dolor sit amet.</h2> <a href="#" class="btn btn-primary">CTA SLIDER</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item img">
<!--                <img class="d-block w-100" src="{{ url('assets/img/home-banner.jpg') }}" alt="Second slide">-->
                <div class="carousel-caption d-none d-md-flex align-items-center justify-content-center">
                    <div class="caption-container">
<!--                        <h5>VIDEO &amp; PHOTO SLIDER</h5> -->
                        <a href="#" class="btn btn-primary">ACTION BUTTON</a>
                    </div>
                </div>
            </div>
            <div class="scroll-btn"> <i class="icofont-scroll-down"></i> </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev"> <i class="icofont-thin-left"></i> <span class="sr-only">Previous</span> </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next"> <i class="icofont-thin-right"></i> <span class="sr-only">Next</span> </a>
    </div>
</div>
<!------------ Banner End ---------------->
<!------------ GINI Membership Start ---------------->
<section class="about-us-section">
    <div class="container">
        <div class="row">
            <div class="col-sm flex-grow-initial"> <img src="{{ url('assets/img/women.jpg') }}" alt=""> </div>
            <div class="col-sm">
                <h3 class="secondary-title">GInI Membership</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                <p class="text-right"><a href="#" class="btn btn-default">Read More</a></p>
            </div>
        </div>
    </div>
</section>
<!------------ GINI Membership End ---------------->
<div class="about-certi-wrapper">
    <!------------ Certified Start ---------------->
    <section class="certified-section">
        <div class="container">
            <div class="owl-carousel owl-theme" id="carousel-certified">
                <div> <img src="{{ url('assets/img/CInOrg.png') }}" alt="" class="img-certificate"> </div>
                <div> <img src="{{ url('assets/img/CDTP.png') }}" alt="" class="img-certificate"> </div>
                <div> <img src="{{ url('assets/img/CCInO.png') }}" alt="" class="img-certificate"> </div>
                <div> <img src="{{ url('assets/img/CInOrg.png') }}" alt="" class="img-certificate"> </div>
                <div> <img src="{{ url('assets/img/CDTP.png') }}" alt="" class="img-certificate"> </div>
                <div> <img src="{{ url('assets/img/CCInO.png') }}" alt="" class="img-certificate"> </div>
            </div>
        </div>
    </section>
    <!------------ Certified End ---------------->
    <!------------ About Us Start ---------------->
    <section class="membership-section">
        <div class="container">
            <div class="row">
                <div class="col-sm flex-grow-initial"> <img src="{{ url('assets/img/member-img.jpg') }}" alt=""> </div>
                <div class="col-sm">
                    <h3 class="secondary-title">Abou Us</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                    <p class="text-right"><a href="#" class="btn btn-default">Read More</a></p>
                </div>
            </div>
        </div>
    </section>
    <!------------ About Us End ---------------->
</div>
<!------------ Accreditation Slider Start ---------------->
<section class="certified-section">
    <div class="container">
        <div class="owl-carousel owl-theme" id="carousel-accreditation">
            <div>
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="secondary-title">GInI Business Incubator Accreditation</h3>
                        <p>Business IncubatorThe Global Innovation Institute – under the direction and authority of the GInI Accreditation Program – operates the GInI Accreditation Center as a means of further advancing the practice of business innovation. The Center issues a series of accreditations to entities and programs relating to business innovation, amongst which are Business Incubators.</p>
                        <p><a href="#" class="btn btn-default">Find out more</a></p>
                    </div>
                    <div class="col-sm"> <img src="{{ url('assets/img/Business-Incubator.png') }}" alt="" class="img-certificate"> </div>
                </div>
            </div>
            <div>
                <div class="row">
                    <div class="col-sm-8">
                        <h3 class="secondary-title">GInI Membership</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
                        <p><a href="#" class="btn btn-default">Read More</a></p>
                    </div>
                    <div class="col-sm"> <img src="{{ url('assets/img/Business-Incubator.png') }}" alt="" class="img-certificate"> </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------ Accreditation Slider End ---------------->
<!--   Seperator    -->
<div class="section-separator"></div>
<!--  Seperator -->
<!------------ Blog Posts ---------------->
<section class="blog-section">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <h2 class="home-blog-title">GInI BLOG</h2>
                <div class="row post-row">
                    <div class="col-3 col-featured"><img src="{{ url('assets/img/index-page-img-3.jpg') }}" alt="" class="featured-image"></div>
                    <div class="col-9">
                        <p class="post-date">15 NOV 2018</p>
                        <h2 class="post-title">Maecenas fringilla placerat sapien</h2>
                        <p class="post-excerpt">Quisque maximus ac neque quis efficitur. Nunc tempus mauris at tortor facilisis, sit amet posuere ante feugiat. In pharetra velit et turpis commodo...</p>
                        <div class="post-meta"><span class="post-author mr-3">Admin</span><span class="post-comments mr-3"><i class="fa fa-comment"></i> 19</span> <span class="post-time"> 12 hours ago</span></div>
                    </div>
                </div>
                <div class="row post-row">
                    <div class="col-3 col-featured"><img src="{{ url('assets/img/index-page-img-4.jpg') }}" alt="" class="featured-image"></div>
                    <div class="col-9">
                        <p class="post-date">15 NOV 2018</p>
                        <h2 class="post-title">Maecenas fringilla placerat sapien</h2>
                        <p class="post-excerpt">Quisque maximus ac neque quis efficitur. Nunc tempus mauris at tortor facilisis, sit amet posuere ante feugiat. In pharetra velit et turpis commodo...</p>
                        <div class="post-meta"><span class="post-author mr-3">Admin</span><span class="post-comments mr-3"><i class="fa fa-comment"></i> 19</span> <span class="post-time"> 12 hours ago</span></div>
                    </div>
                </div>
                <div class="row post-row">
                    <div class="col-3 col-featured"><img src="{{ url('assets/img/index-page-img-5.jpg') }}" alt="" class="featured-image"></div>
                    <div class="col-9">
                        <p class="post-date">15 NOV 2018</p>
                        <h2 class="post-title">Maecenas fringilla placerat sapien</h2>
                        <p class="post-excerpt">Quisque maximus ac neque quis efficitur. Nunc tempus mauris at tortor facilisis, sit amet posuere ante feugiat. In pharetra velit et turpis commodo...</p>
                        <div class="post-meta"><span class="post-author mr-3">Admin</span><span class="post-comments mr-3"><i class="fa fa-comment"></i> 19</span> <span class="post-time"> 12 hours ago</span></div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="book-container">
                    <h2 class="book-title text-center">GInI Applied Innovation Master Book &reg;</h2>
                    <div class="book-wrapper text-center"> <img src="{{ url('assets/img/gini-master-book.png') }}" alt="" class="gini-master-book"> </div>
                    <div class="text-center btn-container"><a href="#" class="btn btn-default">READ MORE</a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------ Blog Posts ---------------->
<!------------ Features Start ---------------->
<section class="features-section">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="feature-container"> <span class="icon-wrapper m-auto">
                        <i class="icofont-ui-user-group"></i>
                    </span>
                    <h3 class="feature-title">BOARD OF ADVISER</h3>
                    <p>Mauris urna neque, volutpat et lorem sit amet, aliquam ornare ex. Maecenas Class aptent taciti sociosqu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-container"> <span class="icon-wrapper m-auto">
                        <i class="icofont-badge"></i>
                    </span>
                    <h3 class="feature-title">MISSION, VISION, VALUES</h3>
                    <p>Mauris urna neque, volutpat et lorem sit amet, aliquam ornare ex. Maecenas Class aptent taciti sociosqu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-container"> <span class="icon-wrapper m-auto">
                        <i class="icofont-tie"></i>
                    </span>
                    <h3 class="feature-title">GInI Brand</h3>
                    <p>Mauris urna neque, volutpat et lorem sit amet, aliquam ornare ex. Maecenas Class aptent taciti sociosqu.</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="feature-container"> <span class="icon-wrapper m-auto">
                        <i class="icofont-bulb-alt"></i>
                    </span>
                    <h3 class="feature-title">GInI Innovation Oath</h3>
                    <p>Mauris urna neque, volutpat et lorem sit amet, aliquam ornare ex. Maecenas Class aptent taciti sociosqu.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------ Features Start ---------------->
@endsection
