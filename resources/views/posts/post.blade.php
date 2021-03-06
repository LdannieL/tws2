@extends('layouts.main')

@section('content')
<div class="single-left">
    <div class="single-left1">
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
                <img src="{{ url("/storage/$post->gallery_img_1") }}" class="img-responsive" alt="" />
            </div>
        </div>
        <div class="col-md-6 w3-rgt">
            <div class="w3-rgt-top">
                <div class="w3agile_special_deals_grid_left_grid">
                    <img src="{{ url("/storage/$post->gallery_img_2") }}" class="img-responsive" alt="" />
                </div>
            </div>
            <div class="w3-rgt-top1">
                <div class="w3agile_special_deals_grid_left_grid">
                    <img src="{{ url("/storage/$post->gallery_img_3") }}" class="img-responsive" alt="" />
                </div>
            </div>
        </div>
        <div class="clearfix"></div>
        @else
        <div class="w3agile_special_deals_grid_left_grid">
            <img src="{{ url("/storage/$post->image") }}" class="img-responsive" alt="" />
        </div>
        @endif
        <h3>{!! $post->title !!}</h3>
        <ul>
            <li><span class="glyphicon glyphicon-user" aria-hidden="true"></span><a href="/home">{{ $post->user->name }}</a></li>
            <li><span class="glyphicon glyphicon-tag" aria-hidden="true"></span><a href="#">5 Tags</a></li>
            <li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="#">5 Comments</a></li>
        </ul>
        <p>
        @if($count = $post::getChildPosts($post->id)->count())
        <article id="series-intro">This series of blog posts includes:
            <ul>
                @foreach($post::getChildPosts($post->id) as $i => $part)
                    <li><i class="fa fa-hand-o-right"></i><a href="/post/{{ $part->slug }}">
                        {{ $part->title }} <span class="bullet">{{$i+1}}/{{$count}}</span>
                    </a></li>
                @endforeach
            </ul>
        </article>
        @endif
        @if(isset($post->parent_id) && $post->parent_id !== 0)
        <?php $count = $post::getChildPosts($post->parent_id)->count(); ?>
        <article id="series-intro">This post is part of the series <a href="/post/{{ $post->getParentPost($post->parent_id)->slug }}"><b>{{ $post->getParentPost($post->parent_id)->title }}</b></a> which includes:
            <ul>
                @foreach($post::getChildPosts($post->parent_id) as $i => $part)
                    <li><i class="fa fa-hand-o-right"></i><a href="/post/{{ $part->slug }}">
                        <span class={{ ($post->id == $part->id) ? 'active': ''}}>{{ $part->title }}</span>  <span class="bullet">{{$i+1}}/{{$count}}</span>
                    </a></li>
                @endforeach
            </ul>
        </article>
        @endif
        {!! $post->body !!}
{{-- @if (!$post->has_complex_body) --}}
        </p>
    </div>
{{-- @endif --}}
{{--     <div class="single-left2">
        <div class="col-md-6 single-left2-left">
            <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">A user can favour product even if not sign in.</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">A user can see the list of all favoureted products in his/her dashboard.</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Accusantium doloremque laudantium</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Vel illum qui dolorem eum fugiat quo</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Quis autem vel eum iure reprehenderit</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Neque porro quisquam est, qui dolorem</a></li>
            </ul>
        </div>
        <div class="col-md-6 single-left2-left">
            <ul>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">A user can add to cart from his/her list of favourated products.</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Fast, lightweight.</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Accusantium doloremque laudantium</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Vel illum qui dolorem eum fugiat quo</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Quis autem vel eum iure reprehenderit</a></li>
                <li><i class="fa fa-check" aria-hidden="true"></i><a href="singlepage.html">Neque porro quisquam est, qui dolorem</a></li>
            </ul>
        </div>
        <div class="clearfix"> </div>
    </div>
    <div class="admin">
        <p>But I must explain to you how all this mistaken idea of denouncing 
            pleasure and praising pain was born and I will give you a complete 
            account of the system, and expound the actual teachings of the great 
            explorer of the truth, the master-builder of human happiness. 
            No one rejects, dislikes, or avoids pleasure itself.</p>
        <a href="#"><i>John Frank</i></a>
    </div> --}}
    <comment comment-url="{{ $post->id }}"></comment>
    <!-- Comments -->
{{--     <div class="comments">
        <h3>Our Recent Comments</h3>
        <div class="comments-grids">
            <div class="comments-grid">
                <div class="comments-grid-left">
                    <img src="/images/3.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                    <h4><a href="#">Michael Crisp</a></h4>
                    <ul>
                        <li>5 December 2016 <i>|</i></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                    <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit 
                        amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="comments-grid">
                <div class="comments-grid-left">
                    <img src="/images/2.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                    <h4><a href="#">Adam Lii</a></h4>
                    <ul>
                        <li>8 December 2016 <i>|</i></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                    <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit 
                        amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="comments-grid">
                <div class="comments-grid-left">
                    <img src="/images/1.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                    <h4><a href="#">Richard Carl</a></h4>
                    <ul>
                        <li>11 December 2016 <i>|</i></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                    <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit 
                        amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="comments-grid">
                <div class="comments-grid-left">
                    <img src="/images/4.png" alt=" " class="img-responsive" />
                </div>
                <div class="comments-grid-right">
                    <h4><a href="#">Thomas Paul</a></h4>
                    <ul>
                        <li>14 December 2016 <i>|</i></li>
                        <li><a href="#">Reply</a></li>
                    </ul>
                    <p>Ut ex metus, ornare ac ultricies sit amet, auctor a elit. Praesent sit 
                        amet scelerisque massa. Duis porta risus id urna finibus aliquet.</p>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    <div class="leave-coment-form">
        <h3>Leave Your Comment</h3>
        <form action="#" method="post">
            <input type="text" name="Name" placeholder="Name" required="">
            <input type="email" name="Email" placeholder="Email" required="">
            <textarea name="Message" placeholder="Your comment here..." required=""></textarea>
            <div class="w3_single_submit">
                <input type="submit" value="Submit Comment" >
            </div>
        </form>
    </div> --}}
<!-- Comments End -->
</div>
@stop

{{-- Magento 1 was released back in 2009, but PHP had really evolved in last couple of years. So, with Magento 2 we have a chance to engage more actively in following trends and best practices of modern PHP. This will be introduction to Magento 2 through real world example - Building Favorites extension with TDD. This will be fast, lightweight extension. We will add "Add to favorites" option next to each product both on PLP and PDP. A user can favor product even if not signed in. A list of favored products is available through each user's account dashboard. In backend, we'll have an admin grid of favored products on Customers. Also, we'll add Exporting Favorites functionality. --}}