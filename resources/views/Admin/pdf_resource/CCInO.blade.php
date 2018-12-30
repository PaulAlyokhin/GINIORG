<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>GINI | GLOBAL INNOVATION INSTITUTE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Google Fonts | Roboto-->
    <!-- Owl carousel CSS -->
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <!-- Select2 CSS -->
    <!--  Font Awesome  -->
    <!--  Icofonts  -->
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ url('assets/css/pdf_style.css') }}">


</head>

<body>
   <div class="pdf-wrapper">
       <div class="container">
           <div class="pdf-header-top-logo">
               <img src="{{ url('assets/img/pdf-logo.png') }}" alt="" class="pdf-logo">
           </div>
           <div class="certify-text">
               <h5 class="mini-pdf-heading">
                   This is to certify that
               </h5>
           </div>
           <div class="pdf-p-text-block">
               <p>
                   having met with distinction the high standards of education,experience and demonstrated knoledge
                   established by the Global Innovation Institute (GInI), has been certified as a  
               </p>
           </div>
           <div class="pdf-main-heading">
               <h2 class="certerd-heading-block">Certified Chief Inovation Officer(CCInO)</h2>
           </div>
           <div class="pdf-bottom-block">
               <div class="row">
                   <div class="col-md-3">
                       <div class="left-sign-area">
                           <span>
                               Chair, Board of Directors 
                           </span>
                       </div>
                   </div> 
                   <div class="col-md-3">
                       <div class="logo-mid-left-block">
                           <img src="{{ url('assets/img/CCInO.png') }}" alt="">
                       </div>
                   </div> 
                   <div class="col-md-3">
                        <div class="logo-mid-right-block">
                           <img src="{{ url('assets/img/gini-gold.png') }}" alt="">
                       </div>
                   </div> 
                   <div class="col-md-3">
                        <div class="right-sign-area">
                           <span>
                              Executive Director
                           </span>
                       </div>
                   </div> 
               </div>
           </div>
           <div class="pdf-bottom-b-block">
               <div class="single-text-writing-block">
                   <span>Certificate Number: {{ $cert_number }}</span>
               </div> 
               <div class="single-text-writing-block">
                   <span>Issue On: {{ $issue_date }}</span>
               </div>
               <div class="single-text-writing-block">
                   <span>Expires On: {{ $expiry_date }}</span>
               </div>
           </div>
           <div class="pdf-footer">
               <span>Online Varification <a href="">www.GInI.org/verification</a></span>
           </div>
       </div>    
   </div> 



















</body>

</html>

    