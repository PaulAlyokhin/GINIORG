@extends('Front.layouts.master')
@section('content')
<!------------ Banner Start ---------------->
<div class="banner banner-single">
    <div class="container">
    </div>
</div>
<!------------ Banner End ---------------->
<!------------ Single Post Start ---------------->
<section class="single">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row mb-3">
                    
                    <div class="col-6">
                        <?php
                            $min_id = App\Models\Blogs::min('id');
                            $max_id = App\Models\Blogs::max('id');
                        ?>
                        @if($blog->id != $min_id)
                        <a href="{{ url('blog/prev/'.$blog->id) }}" class="btn btn-default"><i class="fa fa-angle-left"></i> PREVIOUS</a>
                        @endif
                    </div>
                    <div class="col-6 text-right">
                        @if($blog->id != $max_id)
                        <a href="{{ url('blog/next/'.$blog->id) }}" class="btn btn-primary">NEXT <i class="fa fa-angle-right"></i> </a>
                        @endif
                    </div>
                </div>
                <hr>
                <div class="row">

                    <div class="col-12 col-featured mb-4">
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
                    <div class="col-12">
                        <div class="post-header">
                            <h1>{{ $blog->title }}</h1>
                            <div class="post-meta">
                                <span class="post-author"><a href="#">By {{ $blog->user_id }}</a></span>
                                <span class="post-comments"><a href="#">0 Comments</a></span>
                                <span class="post-time"><a href="#">Posted on {{ $blog->created_at }}</a></span>
                                <span class="post-likes"><a href="#">0 Likes</a></span>
                                <!--<span class="share-post">Share this post
                                    <a href="#" class="mx-1"><i class="fa fa-linkedin"></i></a>
                                    <a href="#" class="mx-1"><i class="fa fa-twitter"></i></a>
                                    <a href="#" class="mx-1"><i class="fa fa-facebook"></i></a>
                                </span>-->
                            </div>
                        </div>
                        <hr>
                        <div class="post-content">
                            <p>{{ $blog->content }}</p>
                        </div>
                        <div class="row post-footer mb-5">
                            <div class="col-sm-8">
                                @if(!auth()->check())
                                <p class="d-flex justify-content-between align-items-center login-section"><span>PLEASE LOG IN TO COMMENT </span><a data-fancybox="" data-src="#login-popup" href="javascript:;" class="btn btn-primary">LOG IN</a></p>
                                @endif
                                <form action="{{ url('blog/postComment') }}" method="POST">
                                @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                    <textarea name="comment" class="form-control col-sm-12" rows="3" placeholder="Leave your comment."></textarea>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                            <div class="col-sm-4 d-flex">
                                <span class="tag-icon mr-2"><i class="fa fa-tag"></i></span>
                                <ul class="tags-list">
                                    <li><a href="#">Lorem</a>,</li>
                                    <li><a href="#">Design</a>,</li>
                                    <li><a href="#">Web Design</a>,</li>
                                    <li><a href="#">Graphic</a>,</li>
                                    <li><a href="#">Photography</a>,</li>
                                    <li><a href="#">certificate</a>,</li>
                                    <li><a href="#">dolor</a>,</li>
                                    <li><a href="#">ipsum</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="sidebar-container">
                    <h2 class="sidebar-title">Posts</h2>
                    <div class="posts-wrapper">
                        
                        <ul class="nav nav-pills " id="sidebar-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Recent Post</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Recent Comments</a>
                        </li>
                        </ul>
                        <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                            @foreach($recent_posts as $blog)
                            <div class="d-flex post-container">
                                <div class="featured-image mr-3">
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
                                <div class="post-content">
                                    <div class="post-meta"><span class="post-time"><a href="#">{{ $blog->created_at }}</a></span></div>
                                    <p class="post-title"><a href="{{ url('blog/single/'.$blog->id) }}">{{ $blog->title }}</a></p>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
                    </div>
                    </div>

                    <div class="comments-wrapper">
                        <h2 class="title">Recent Comments</h2>
                        <div class="comments-conainer">
                            @foreach($recent_comments as $comment)
                            <div class="comment-box">
                                <div class="comment-head d-flex">
                                    <div class="comment-meta">
                                        <div class="meta-top">
                                            <span class="comment-time"> {{ $comment->created_at }} </span>
                                        </div>
                                        <div class="meta-bottom">
                                            <div class="user"><span class="name">{{ $comment->user_id }} </span>said:</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="comment-body pb-5">
                                    <blockquote class="comment mb-0">
                                        {{ $comment->comment }}
                                    </blockquote>
                                </div>
                            </div>
                            @endforeach

                            <p class="refresh"><a href="{{ url()->current() }}"><i class="fa fa-refresh mr-2"></i> Refresh Conversation</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="popular-posts">
            <div class="popular-header bg-primary p-3 d-flex justify-content-between align-items-center">
                <h2>POPULAR POSTS</h2>
                <a href="#"><i class="fa fa-refresh"></i></a>
            </div>
            <div class="popular-posts-container d-flex">
                @foreach($popular_posts as $blog)
                 <div class="col-lg-3 col-md-6 d-flex">
                    <div class="col-3 col-featured pl-lg-0">
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
                    <div class="col-9 pl-lg-0">
                        <p class="post-title"><a href="{{ url('blog/single/'.$blog->id) }}">{{ $blog->title }}</a></p>
                        <div class="post-meta"><span class="post-author mr-3"><a href="#">0 Likes</a></span><span class="post-comments mr-3"><a href="#">0 Comments</a></span></div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="related-posts">
            <div class="row align-items-center">
                <div class="col-3">
                    <h4>Related Posts</h4>
                </div>
                <div class="col-9">
            <div class="owl-carousel owl-theme" id="related-posts-carousel">
                @foreach($related_posts as $blog)
                <div class="related-post-container">
                    <h4 class="post-title"><a href="{{ url('blog/single/'.$blog->id) }}">{{ $blog->title }}</a></h4>
                    <p class="post-time">{{ $blog->created_at }}</p>
                </div>
                @endforeach
            </div>  
                </div>
            </div>
        </div> 
        </div>
    </div>
</section>
<!------------ Single Post Ends ---------------->
@endsection

