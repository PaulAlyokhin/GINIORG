@extends('Front.layouts.master')
@section('content')
<!------------ Banner Start ---------------->
<div class="banner banner-blog">
    <div class="container">
<!--                <h1 class="text-center">Banner Title</h1>-->
    </div>
</div>
<!------------ Banner End ---------------->
<!------------ Blog Start ---------------->
<section class="blog">
    <div class="container">
        <div class="card-columns row-blog mb-5">
            @foreach($blogs as $blog)
            <div class="card">
                <div class="post-container standard">
                    <div class="featured-image"> 
                        <?php
                            if(!empty($blog->blog_media))
                                $files = Storage::files($blog->blog_media);
                        ?>
                        @if($blog->type == 'standard')
                        <img src="{{ url('storage/'.$files[0]) }}" alt="" class=" w-100"> 
                        @endif
                        @if($blog->type == 'slideshow')
                        <div id="post-carousel1" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">
                                @foreach($files as $key => $file)
                                <div class="carousel-item @if($key == 0) active @endif">
                                    <img src="{{ url('storage/'.$file) }}" alt="" class=" w-100">
                                </div>
                                @endforeach
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </div>
                        @endif
                        @if($blog->type == 'youtube')
                        <iframe width="100%" height="auto" src="{{ $blog->video_url }}" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        @endif
                        @if($blog->type == 'vimeo')
                        <div style="padding:56.25% 0 0 0;position:relative;"><iframe src="{{ $blog->video_url }}" style="position:absolute;top:0;left:0;width:100%;height:100%;" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></div>
                        <script src="https://player.vimeo.com/api/player.js"></script>
                        @endif
                    </div>
                    <div class="post-data">
                        <h2 class="post-title"><a href="{{ url('blog/single/'.$blog->id) }}">{{ $blog->title }}</a></h2>
                        <div class="post-info">
                            <span class="post-author"><a href="#">By {{ $blog->user_id }}</a></span>
                            <span class="post-cat"><a href="#">{{ $blog->what_for }}</a></span>
                        </div>
                        <div class="divider"></div>
                        <?php
                            if(strlen($blog->content) >= 130)
                                $blog->content = substr($blog->content,0,130).'...';
                        ?>
                        <p class="post-excerpt">{{ $blog->content }}</p>
                        <p><a href="{{ url('blog/single/'.$blog->id) }}" class="btn btn-default">Read More</a></p>
                        <div class="divider"></div>
                    </div>
                    <div class="post-meta"><span class="post-comments"><a href="#"><i class="fa fa-comment-o"></i> 0 Comments</a></span><span class="post-time"><a href="#"><i class="fa fa-calendar"></i> {{ $blog->created_at }}</a></span><span class="post-likes"><a href="#"><i class="fa fa-thumbs-o-up"></i> 0</a></span></div>
                </div>
            </div>
            @endforeach
            <!--  Blog Post -->
            <div class="card">
                <div class="post-container audio">
                    <div class="featured-image">
                        <audio controls>
                            <source src="horse.ogg" type="audio/ogg">
                            <source src="horse.mp3" type="audio/mpeg">
                            Your browser does not support the audio element.
                        </audio>
                    </div>
                    <div class="post-data">
                        <h2 class="post-title"><a href="#">Audio Post</a></h2>
                        <div class="post-info">
                            <span class="post-author"><a href="#">By Admin</a></span>
                            <span class="post-cat"><a href="#">News</a></span>
                        </div>
                        <div class="divider"></div>
                        <p class="post-excerpt">strlen('Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nemo, ipsam dicta ratione quos maxime commodi. Lorem ipsum dolor sit amet'...</p>

                        <div class="divider"></div>
                    </div>
                    <div class="post-meta"><span class="post-comments"><a href="#"><i class="fa fa-comment-o"></i> 19 Comments</a></span><span class="post-time"><a href="#"><i class="fa fa-calendar"></i> 12 December 2018</a></span><span class="post-likes"><a href="#"><i class="fa fa-thumbs-o-up"></i> 12</a></span></div>
                </div>
            </div>
        </div>
        <div class="row pt-5" style="border-top:1px solid #fcb827;">
            <div class="col">
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center">
                        <li class="page-item mr-2"><a class="page-link" href="#"><i class="fa fa-home"></i></a></li>
                        <li class="page-item mr-2">
                            <a class="page-link" href="#" aria-label="Previous">
                                <span aria-hidden="true"><i class="fa fa-angle-left"></i></span>
                                <span class="sr-only">Previous</span>
                            </a>
                        </li>
                        <li class="page-item mr-2">
                            <a class="page-link" href="#" aria-label="Next">
                                <span aria-hidden="true"><i class="fa fa-angle-right"></i></span>
                                <span class="sr-only">Next</span>
                            </a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
</section>
<!------------ Blog End ---------------->
@endsection