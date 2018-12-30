<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GINI | GLOBAL INNOVATION INSTITUTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ url('assets/img/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ url('assets/img/favicon-16x16.png') }}">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#981b34">
    <meta name="msapplication-TileColor" content="#981b34">
    <meta name="theme-color" content="#ffffff">
    <!-- Google Fonts | Roboto-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oxygen:300,400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,600,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed" rel="stylesheet">
    <!-- Coices CSS   -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/choices.js@4/public/assets/styles/choices.min.css">
<!--    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.css">-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.4/jquery.fancybox.min.css">
    <!-- Owl carousel CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!--  Font Awesome  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--  Icofonts  -->
    <link rel="stylesheet" href="{{ url('assets/fonts/icofont/icofont.min.css') }}">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ url('assets/css/responsive.css') }}"> 
<!--    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    @yield('after_style')
</head>

<body>
        <script type="text/javascript">
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
    </script>
    <div class="wrapper">
        <!------------ Header Start ---------------->
        @include('Front.layouts.inc.header')
        <!------------ Header End ------------------>
        @yield('content')
        <!------------ Footer Start ---------------->
        @include('Front.layouts.inc.footer')
        <!------------ Footer End ---------------->
    </div>
    <!-- Bootstrap JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"     integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <!-- Owl carousel JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.0.47/jquery.fancybox.min.js"></script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.4/jquery.fancybox.min.js"></script>
    <!-- Include Choices JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/choices.js@4/public/assets/scripts/choices.min.js"></script>
    <!-------------- Owl carousel responsive ------------>
    @yield('after_script')
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


            $('.collapse').on('shown.bs.collapse', function() {
                $(this).prev().addClass('active-acc');
            });

            $('.collapse').on('hidden.bs.collapse', function() {
                $(this).prev().removeClass('active-acc');
            });

            //    scroll button
            $(document).on('click', '.scroll-btn', function(event){                        
                event.preventDefault();
                var viewportHeight = $(window).height();

                $('html, body').animate({
                    scrollTop: viewportHeight,
                    complete: function () {
                        //Hide your button here
                    }
                }, 750);
            });
            var url = window.location;
            $('ul.navbar-nav a[href="'+ url +'"]').parent().addClass('active');
            $('ul.navbar-nav a').filter(function() {
                 return this.href == url;
            }).parent().addClass('active');

        })

    </script>
    
<!-- choises js-->
<script>
      const customSelects = document.querySelectorAll("select");
      const deleteBtn = document.getElementById('delete')
      const choices = new Choices('select',
      {
        searchEnabled: false,
        itemSelectText: '',
        removeItemButton: true,
      });
      for (let i = 0; i < customSelects.length; i++)
      {
        customSelects[i].addEventListener('addItem', function(event)
        {
          if (event.detail.value)
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('valid')
            parent.classList.remove('invalid')
          }
          else
          {
            let parent = this.parentNode.parentNode
            parent.classList.add('invalid')
            parent.classList.remove('valid')
          }
        }, false);
      }
      deleteBtn.addEventListener("click", function(e)
      {
        e.preventDefault()
        const deleteAll = document.querySelectorAll('.choices__button')
        for (let i = 0; i < deleteAll.length; i++)
        {
          deleteAll[i].click();
        }
      });

    </script>
</body>

</html>
