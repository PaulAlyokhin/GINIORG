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
            <li class="nav-item"> <a class="nav-link active" id="about-tab" data-toggle="tab" href="#about" role="tab" aria-controls="about" aria-selected="true">GInI Knowledge Center</a> </li>
            <li class="nav-item"> <a class="nav-link" id="board-tab" data-toggle="tab" href="#board" role="tab" aria-controls="board" aria-selected="false">Board of Advisers</a> </li>
            <li class="nav-item"> <a class="nav-link" id="code-value-tab" data-toggle="tab" href="#code-value" role="tab" aria-controls="code-value" aria-selected="false">GInI Code of Value</a></li>
            <li class="nav-item"> <a class="nav-link" id="gini-brand-tab" data-toggle="tab" href="#gini-brand" role="tab" aria-controls="gini-brand" aria-selected="false">GInI Brand</a> </li>
            <li class="nav-item"> <a class="nav-link" id="gini-oath-tab" data-toggle="tab" href="#gini-oath" role="tab" aria-controls="gini-oath" aria-selected="false">GInI Oath</a> </li>
            <li class="nav-item"> <a class="nav-link" id="tender-tab" data-toggle="tab" href="#tender" role="tab" aria-controls="tender" aria-selected="false">Call for Tender</a> </li>
        </ul>
        <div class="tab-content" id="tab-faq">
            <div class="tab-pane fade show active" id="about" role="tabpanel" aria-labelledby="-about-tab">
                <h2 class="title">GInI Knowledge Center</h2>

<p>GInI Knowledge Center is the Institute’s central repository for all of its publicly-accessible knowledge resources.</p>

<p>Here professionals can access a number of useful knowledge resources to apply in their ongoing innovation work.</p>

<p>There are three (3) resource sites within the GInI Knowledge Center:</p>

<ul>
    <li>The GInI Innovation Models – key models on which are built much of GInI’s unique innovation insights.</li>
    <li>The GInI Applied Innovation Master Book – GInI’s central body-of-knowledge resource.</li>
    <li>The GInI Blog Site – GInI’s central blog resource where a number of highly insightful articles can be found.</li>
</ul>
<p>Professionals can also find additional GInI resources at the GInI Download Center, including GInI Guidebooks, the GInI Innovation Models, GInI logos, GInI badges, and GInI Application Forms.</p>

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
                                <h5>GInI APPLIED INNOVATION MASTER BOOK&reg;</h5>
                            </div>
                            <div class="master-img text-center"><i class="icofont-badge"></i></div>
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
                                <h5>GInI APPLIED INNOVATION MASTER BOOK&reg;</h5>
                            </div>
                            <div class="master-img text-center"><i class="icofont-badge"></i></div>
                        </div>
                        <div class="master-footer text-center mb-3">
                            <h2 class="title">MASTER BOOK</h2>
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
