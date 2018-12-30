@extends('Front.layouts.master')
@section('content')
<!------------ Map Start ---------------->
<div class="banner banner-contact">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2919.72218113263!2d-85.6717624845245!3d42.963058679150954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8819ad80f1aff36d%3A0x5788b43a71626a42!2sGlobal+Innovation+Institute!5e0!3m2!1sen!2s!4v1544058113507" width="100%" height="690" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>

<section class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mb-5 mb-md-0">
                <form action="" class="account-form">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="fname">First Name *</label>
                            <input type="text" class="form-control" id="fname" required>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="lname">Last Name *</label>
                            <input type="text" class="form-control" id="lname" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="email">Email*</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="phone">PHONE*</label>
                            <input type="url" class="form-control" id="phone" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="subject">Subject</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col">
                            <label for="subject">Message</label>
                            <textarea name="" id="" cols="30" class="form-control" rows="10"></textarea>
                        </div>
                    </div>
                    <div class="col mt-3">
                    <button type="submit" class="btn btn-primary">SEND MESSAGE</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6">
                <h2>Nice to hear from you</h2>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Magni corporis placeat maxime consequatur, omnis minus accusamus tempora repellat deserunt at quo neque molestias consequuntur hic. Magnam quam, quas nemo repellat.</p>
                <h2 class="mb-4">Contact Information</h2>
                <div class="addr">
                    <h5>Business Hours</h5>
                    <p>Monday-Friday 8 AM to 5 PM.</p>
                    <p>Saturday &amp; Sunday: Closed</p>
                </div>
                <div class="addr">
                    <h5>Phone</h5>
                    <p><a href="tel:+18772767701">Phone:+1 877 276 7701</a></p>
                </div>
                <div class="addr">
                    <h5>Location</h5>
                    <p>Grand Rapids, MI 49503 USA </p>
                </div>
                <div class="addr">
                    <h5>Email</h5>
                    <p><a href="mailto:gini@gini.org">GInI@GInI.org</a></p>
                </div>

            </div>
        </div>
    </div>
</section>
<!------------ Map End ---------------->
@endsection