<!------------ Footer Start ---------------->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-mg-6 col-lg-8"> <a href="index.php"><img src="assets/img/logo-footer.png" alt="" class="logo-footer mr-3"> </a><span class="footer-address">Grand Rapids, MI 49503 USA | +1 877 276 7701 | GInI@GInI.org</span> <span><a href="#" class="social-icon"><i class="fa fa-linkedin"></i></a><a href="#" class="social-icon"><i class="fa fa-twitter"></i></a></span> </div>
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
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>

<ul class="fixed-social nav">
    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-facebook"></i></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-linkedin"></i></a></li>
    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-envelope"></i></a></li>
</ul>

<!------------ Footer End ---------------->
</div>
<!-- Bootstrap JS-->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<!-- Owl carousel JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

<!-- Select2 JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>


<!--Choises JS -->
<script src="https://colorlib.com/etc/searchf/colorlib-search-10/js/extention/choices.js"></script>

<!-------------- Owl carousel responsive ------------>
<script>
    $('#carousel-certified').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1, //                    nav: true
            },
            600: {
                items: 2, //                    nav: false
            },
            1000: {
                items: 3, //                    nav: true,
                //                    loop: false
            }
        }
    })
    $('#carousel-accreditation').owlCarousel({
        loop: true,
        margin: 10,
        nav: false,
        dots: true,
        responsiveClass: true,
        responsive: {
            0: {
                items: 1,
            },
            600: {
                items: 1,
            },
            1000: {
                items: 1,
            }
        }
    })
    $(document).ready(function() {
        $("#carousel").owlCarousel({
            items: 1,
            autoPlay: 5500,
            stopOnHover: true,
            center: true,
            navigation: false,
            pagination: false,
            goToFirstSpeed: 1300,
            singleItem: true,
            autoHeight: true,
            responsive: true,
            responsiveRefreshRate: 200,
            responsiveBaseWidth: window,
            video: true,
            transitionStyle: "fade",
            onTranslate: function() {
                $('.owl-item').find('video').each(function() {
                    this.pause();
                });
            }
        });

        /* add remove class to collapse */

        $('.collapse').on('shown.bs.collapse', function() {
            $(this).prev().addClass('active-acc');
        });

        $('.collapse').on('hidden.bs.collapse', function() {
            $(this).prev().removeClass('active-acc');
        });

        /* add body class */
        // find the pathname
        var urlPath = window.location.pathname;
        //convert to lowercase
        urlPath.match(/\/(.*?)(\+|$)/)[1].toLowerCase();
        // remove the first character
        urlPath = urlPath.replace(/\//g, '-').slice(1);
        //remove file extension
        urlPath = urlPath.replace(/\.[^/.]+$/, "");
        // add class to body
        $(document.body).addClass(urlPath);
        // If body has no class its propably the homepage
        $('body:not([class])').addClass('home');

        //        initiating select2
        $(document).ready(function() {
            $('.custom-select').select2();
        });


        //        checked parent class
        var $radioButtons = $('.chose-method input[type="radio"]');
        $radioButtons.click(function() {
            $radioButtons.each(function() {
                $(this).closest(".chose-method").toggleClass('checked', this.checked);
            });
        });
    })

</script>


</body>

</html>
