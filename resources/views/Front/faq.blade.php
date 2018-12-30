@extends('Front.layouts.master')
@section('content')
<!------------ Banner Start ---------------->
<div class="banner banner-faq">
    <div class="container">
        <!--                <h1 class="text-center">Banner Title</h1>-->
    </div>
</div>
<!------------ Banner End ---------------->
<!------------ Product Description Start ---------------->
<section class="faq">
    <div class="container">
        <ul class="nav nav-tabs" id="myTab" role="tablist">
            @foreach($categories as $key=>$category)
            <li class="nav-item"> <a class="nav-link @if($key == 0) active @endif" id="{{ $category->category_slug }}-tab" data-toggle="tab" href="#{{ $category->category_slug }}" role="tab" aria-controls="{{ $category->category_slug }}" aria-selected="true">{{ $category->category_name }}</a> </li>
            @endforeach
        </ul>
        <div class="tab-content" id="tab-faq">
            @foreach($categories as $key=>$category)
            <div class="tab-pane fade @if($key == 0) show active @endif" id="{{ $category->category_slug }}" role="tabpanel" aria-labelledby="{{ $category->category_slug }}-tab">
                <h2 class="title">{{ $category->category_name }}</h2>
                <div class="accordion" id="accordion-faq">
                <?php
                    $faqs = App\Models\FAQ::where('category', $category->id)->get();
                ?>
                @foreach($faqs as $key_faq => $each)
                    <div class="card">
                        <div class="card-header @if($key_faq == 0) active-acc @endif" id="heading{{ $each->id }}">
                            <h5 class="mb-0">
                                <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse{{ $each->id }}" aria-expanded="false" aria-controls="collapse{{ $each->id }}">
                                    {{ $each->question }}
                                </button>
                            </h5>
                        </div>
                        <div id="collapse{{ $each->id }}" class="collapse @if($key_faq == 0) show @endif" aria-labelledby="heading{{ $each->id }}" data-parent="#accordion-faq">
                            <div class="card-body">{{ $each->answer }}</div>
                        </div>
                    </div>
                @endforeach
                </div>
            </div>
            @endforeach
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
