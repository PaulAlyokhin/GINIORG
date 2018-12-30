@extends('Front.layouts.master')
@section('content')
<!------------ Banner Start ---------------->
<div class="banner banner-knowledge">
    <div class="container">
    </div>
</div>
<!------------ Banner End ---------------->
<!------------ Product Description Start ---------------->
<section class="inner faq">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            <li class="nav-item"> <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">Membership</a> </li>
            <li class="nav-item"> <a class="nav-link" id="board-tab" data-toggle="tab" href="#board" role="tab" aria-controls="board" aria-selected="false">Board of Advisers</a> </li>
            <li class="nav-item"> <a class="nav-link" id="code-value-tab" data-toggle="tab" href="#code-value" role="tab" aria-controls="code-value" aria-selected="false">GInI Code of Value</a></li>
            <li class="nav-item"> <a class="nav-link" id="gini-brand-tab" data-toggle="tab" href="#gini-brand" role="tab" aria-controls="gini-brand" aria-selected="false">GInI Brand</a> </li>
            <li class="nav-item"> <a class="nav-link" id="gini-oath-tab" data-toggle="tab" href="#gini-oath" role="tab" aria-controls="gini-oath" aria-selected="false">GInI Oath</a> </li>
            <li class="nav-item"> <a class="nav-link" id="tender-tab" data-toggle="tab" href="#tender" role="tab" aria-controls="tender" aria-selected="false">Call for Tender</a> </li>
        </ul>
        <div class="tab-content" id="tab-faq">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="-about-tab">
                <h2 class="title">Membership</h2>


<p>The GInI Membership allows you to be a part of a unique establishment, a society dedicated to all the brilliant innovative minds out there, a place that brings together ideas and people and a lab to create, test, experiment and succeed.</p>

<p>Being a member of GInI grants you exclusive networking opportunities and invitations to roundtable events, you will also have access to all our blogs, forms, articles, publications and news that are related to the innovation industry and finally you will get special prices and discounts on our certificates, events, master classes, exams, renewals, publications and online assessments. </p>

1. <strong>Stay Up-to-Date</strong>
<p>With our Blogs, Forms, Discuss Boards, Latest Articles and News we bring to you all you need to know in order to stay up to date on Innovation and anything related to this matter.</p>

2. <strong>Networking Opportunities</strong>
<p>Become one of the Innovation Society and get access to other fellow innovators worldwide. Share your successful innovations or find other fellow innovators who can help you with an upcoming project.</p>

3. <strong>Professional Advancement</strong>
<p>Our certificates are constantly being improved to adapt to the quick and ever changing market, and to ensure the latest strategies and tools are being implemented in order to help you advance in your career and empower your establishment.</p>

4. <strong>Publications</strong>
<p>Innovation related publications will be available for members to help them stay well-informed on all the latest trends and strategies.</p>

5. <strong>Special Offers</strong>
<p>All GInI members enjoy special offers and discounts on GInI events.</p>

            </div>
            <div class="tab-pane fade" id="board" role="tabpanel" aria-labelledby="board-tab">
                <h2 class="title">Board of Advisers</h2>
            </div>
            <div class="tab-pane fade" id="code-value" role="tabpanel" aria-labelledby="code-value-tab">
                <h2 class="title">GInI Code of Value</h2>
            </div>
            <div class="tab-pane fade" id="gini-brand" role="tabpanel" aria-labelledby="gini-brand-tab">
                <h2 class="title">GInI Brand</h2>
            </div>
            <div class="tab-pane fade" id="gini-oath" role="tabpanel" aria-labelledby="gini-oath-tab">
                <h2 class="title">Innovation Development Units - IDUS</h2>
            </div>
            <div class="tab-pane fade" id="tender" role="tabpanel" aria-labelledby="tender-tab">
                <h2 class="title">Call For Tender</h2>
            </div>
        </div>
    </div>
</section>
<!------------ Product Description Start ---------------->
<!------------ Other Certifications Start ---------------->
<section class="categories">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-4 flex-grow-initial">
                <div class="master-container m-auto  text-center">
                    <div class="master-inner">
                        <div class="master-header">
                            <div class="master-title">
                                <h5>GInI APPLIED INNOVATION MASTER BOOK&reg;</h5>
                            </div>
                            <div class="master-img text-center"><i class="icofont-book"></i></div>
                        </div>
                        <div class="master-footer text-center mb-3">
                            <h2 class="title">MASTER BOOK</h2>
                        </div>
                        <a href="#" class="master-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 flex-grow-initial">
                <div class="master-container m-auto text-center">
                    <div class="master-inner">
                        <div class="master-header">
                            <div class="master-title">
                                <h5>GInI CERTIFICATION PROGRAM</h5>
                            </div>
                            <div class="master-img text-center"><i class="icofont-badge"></i></div>
                        </div>
                        <div class="master-footer text-center mb-3">
                            <h2 class="title">PROFESSIONAL CERTIFICATIONS</h2>
                        </div>
                        <a href="#" class="master-link"></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-lg-4 flex-grow-initial">
                <div class="master-container m-auto text-center">
                    <div class="master-inner">
                        <div class="master-header">
                            <div class="master-title">
                                <h5>GInI CERTIFICATION PROGRAM</h5>
                            </div>
                            <div class="master-img text-center"><i class="icofont-badge"></i></div>
                        </div>
                        <div class="master-footer text-center mb-3">
                            <h2 class="title">ORGANIZATIONAL CERTIFICATION</h2>
                        </div>
                        <a href="#" class="master-link"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!------------ Other Certifications End ---------------->
@endsection