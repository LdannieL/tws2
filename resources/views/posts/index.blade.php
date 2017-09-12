@extends('layouts.main')

@section('content')	
	@if ($posts->count())
		@foreach ($posts as $post)
			<div class="wthree-top">
				<div class="w3agile-top">
					{{-- 	{!! link_to_route('post', $post->title, array($post->id)) !!} --}}
						@if ($post->hasVideo())
							<video src="{{ url("/storage/$post->video") }}" width="783" height="522" poster="" controls>
								<p>If you are reading this, it is because your browser does not support embedded videos.</p>
							</video>
        @elseif ($post->hasSlider())
        <section class="slider">
            <div class="flexslider">
                <ul class="slides">
                    <li>
                        <div class="w3agile_special_deals_grid_left_grid">
                            <img src="{{ url("/storage/$post->gallery_img_1") }}" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="w3agile_special_deals_grid_left_grid">
                            <img src="{{ url("/storage/$post->gallery_img_2") }}" class="img-responsive" alt="" />
                        </div>
                    </li>
                    <li>
                        <div class="w3agile_special_deals_grid_left_grid">
                            <img src="{{ url("/storage/$post->gallery_img_3") }}" class="img-responsive" alt="" />
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    <!-- flexSlider -->
    <script defer src="/js/jquery.flexslider.js"></script>
        <script type="text/javascript">
            $(window).load(function(){
              $('.flexslider').flexslider({
                animation: "slide",
                start: function(slider){
                  $('body').removeClass('loading');
                }
              });
            });
    </script>
    <!-- //flexSlider -->
						@elseif ($post->hasGallery())
						<div class="col-md-6 w3-lft">
							<div class="w3agile_special_deals_grid_left_grid">
								<a href="/post/{{ $post->slug }}"><img src="{{ url("/storage/$post->gallery_img_1") }}" class="img-responsive" alt="" /></a>
							</div>
						</div>
						<div class="col-md-6 w3-rgt">
							<div class="w3-rgt-top">
								<div class="w3agile_special_deals_grid_left_grid">
									<a href="/post/{{ $post->slug }}"><img src="{{ url("/storage/$post->gallery_img_2") }}" class="img-responsive" alt="" /></a>
								</div>
							</div>
							<div class="w3-rgt-top1">
								<div class="w3agile_special_deals_grid_left_grid">
									<a href="/post/{{ $post->slug }}"><img src="{{ url("/storage/$post->gallery_img_3") }}" class="img-responsive" alt="" /></a>
								</div>
							</div>
						</div>
						<div class="clearfix"></div>
						@else
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="/post/{{ $post->slug }}"><img src="{{ url("/storage/$post->image") }}" class="img-responsive" alt="" /></a>
						</div>
						@endif
					<div class="w3agile-middle">
					<ul>
						<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>{{{ date('Y-m-d', strtotime($post->created_at)) }}}</a></li>
						<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
						<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
						
					</ul>
				</div>
				</div>
				
				<div class="w3agile-bottom">
					<div class="col-md-3 w3agile-left">
						<h5>
						{{-- <a href="/{{ $post->slug }}"> --}}
						{{ $post->title }}
						{{-- </a> --}}
						</h5>
					</div>
					<div class="col-md-9 w3agile-right">
						<h3>
						{{-- <a href="/post/{{ $post->id }}"> --}}
						<a href="/post/{{ $post->slug }}">
						{{ $post->excerpt }}</a></h3>
						<p>{!! str_limit($post->body, 300) !!}</p>
						<a class="agileits w3layouts" href="/post/{{ $post->slug }}">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
					</div>
						<div class="clearfix"></div>
				</div>
			</div>
			<!-- wthree-top-1 -->



{{-- 			<article>
			    <h2>{!! link_to_route('post', $post->title, array($post->id)) !!}</h2>
			    <p class="created_at blog-post-meta">Created on {{{ date('Y-m-d', strtotime($post->created_at))}}} by <a href="#">{{{ $post->user->name }}}</a></p>
			    <p>{!! str_limit($post->body, 300) !!}</p>
			    <p>{!! link_to_route('post', 'Read More &rsaquo;', array($post->id)) !!}</p>
			</article> --}}
		@endforeach
		{{-- @include('posts._partials.pager') --}}
	@endif
	{!! $posts->render() !!}
@stop


{{-- 				<div class="wthree-top-1">
					<div class="w3agile-top">
						<section class="slider">
					<div class="flexslider">
						<ul class="slides">
							<li>
								<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="/images/2.jpg" class="img-responsive" alt="" /></a>
								</div>
							</li>
							<li>
								<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="/images/3.jpg" class="img-responsive" alt="" /></a>
								</div>
							</li>
							<li>
								<div class="w3agile_special_deals_grid_left_grid">
									<a href="singlepage.html"><img src="/images/3.jpg" class="img-responsive" alt="" /></a>
								</div>
							</li>
						</ul>
					</div>
				</section>
			<!-- flexSlider -->
				<script defer src="js/jquery.flexslider.js"></script>
				<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				</script>
			<!-- //flexSlider -->

						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
							
						</ul>
					</div>
					</div>
					
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5>Sit amet consectetur</h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
							<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<!-- //wthree-top-1 -->
				<!-- wthree-top-1 -->
				<div class="wthree-top-1">
					<div class="w3agile-top">
						<iframe src="https://player.vimeo.com/video/37111758" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
							
						</ul>
					</div>
					</div>
					
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5>Sit amet consectetur</h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
							<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<!-- //wthree-top-1 -->
				<div class="wthree-top-1">
					<div class="w3agile-top">
					<div class="col-md-6 w3-lft">
						<div class="w3agile_special_deals_grid_left_grid">
							<a href="singlepage.html"><img src="images/5.jpg" class="img-responsive" alt="" /></a>
						</div>
					</div>
					<div class="col-md-6 w3-rgt">
						<div class="w3-rgt-top">
							<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="images/g6.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
						<div class="w3-rgt-top1">
							<div class="w3agile_special_deals_grid_left_grid">
								<a href="singlepage.html"><img src="images/g8.jpg" class="img-responsive" alt="" /></a>
							</div>
						</div>
					</div>
					<div class="clearfix"></div>
						<div class="w3agile-middle">
						<ul>
							<li><a href="#"><i class="fa fa-calendar" aria-hidden="true"></i>FEB 15,2017</a></li>
							<li><a href="#"><i class="fa fa-thumbs-up" aria-hidden="true"></i>201 LIKES</a></li>
							<li><a href="#"><i class="fa fa-comment" aria-hidden="true"></i>15 COMMENTS</a></li>
							
						</ul>
					</div>
					</div>
					
					<div class="w3agile-bottom">
						<div class="col-md-3 w3agile-left">
							<h5>Sit amet consectetur</h5>
						</div>
						<div class="col-md-9 w3agile-right">
							<h3><a href="singlepage.html">Amet consectetur adipisicing </a></h3>
							<p>Lorem ipsum dolor sit amet consectetur adipisicing elit sedc dnmo eiusmod tempor incididunt ut labore et dolore magna aliqua uta enim ad minim ven iam quis nostrud exercitation ullamco labor nisi ut aliquip exea commodo consequat duis aute irudre dolor in elit sed uta labore dolore reprehender</p>
							<a class="agileits w3layouts" href="singlepage.html">Read More <span class="glyphicon agileits w3layouts glyphicon-arrow-right" aria-hidden="true"></span></a>
						</div>
							<div class="clearfix"></div>
					</div>
				</div>
				<!-- wthree-top-1 --> --}}
