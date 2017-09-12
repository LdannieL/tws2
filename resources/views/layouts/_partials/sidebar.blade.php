        <!-- btm-wthree-right -->
      <div class="col-md-3 w3agile_blog_left">
        <div class="wthreesearch">
              <form action="/ssearchres" method="get">
              {{ csrf_field() }}
               {{--  <input v-model="keyword" type="text" placeholder="Search here" > --}} 
               <!-- ne prosledjuje v-model zato sto nije forma na istoj ruti kao mounted method -->
                <input type="search" placeholder="Search here" name="search" required=""/>
             {{--    <input v-model="keyword" type="search" name="search" placeholder="Search here" required=""> --}}
                <button type="submit" class="btn btn-default search" aria-label="Left Align">
                  <i class="fa fa-search" aria-hidden="true"></i>
                </button>
              </form>
            
        </div>
        <div class="sidebar-module sidebar-module-inset">
            <div class="comments-grid-left">
              <img src="/images/hippy.gif" alt=" " class="img-responsive" />
            </div>
            <h4>About Me</h4>
            <p>Hey! I'm <a href="https://www.twitter.com/dannie0la">@dannie0la</a>, Senior Software Engineer, focused mainly on PHP, <em>Magento</em> and Laravel for last 5 years.</p>
        </div>
        <div class="agileinfo_calender">
        <h3>CONNECT</h3>
        <div class="w3ls-social-icons-1">
          <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
          <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
          <a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
        </div>
        </div>
        <div class="w3ls_popular_posts">
          <h3>Popular Posts</h3>
          @foreach($pop_posts = \App\Post::popular() as $pop_post)
            <div class="agileits_popular_posts_grid">
              <div class="w3agile_special_deals_grid_left_grid">
                <a href="/post/{{ $pop_post->id }}"><img src="{{ url("/storage/$pop_post->image") }}" class="img-responsive" alt="" /></a>
              </div>
              <h4><a href="/post/{{ $pop_post->id }}">{{ $pop_post->title }}</a></h4>
              <h5><i class="fa fa-calendar" aria-hidden="true"></i>{{{ date('Y-m-d', strtotime($pop_post->created_at)) }}}</h5>
            </div>
          @endforeach
        </div>
        
        <div class="w3l_categories">
          <h3>Categories</h3>
          <ul>
            @foreach($categories = \App\Category::get() as $category)
              <li><a href="/{{ $category->slug }}"><span class="glyphicon glyphicon-arrow-right" aria-hidden="true"></span>{{ $category->name }}</a></li>
            @endforeach
          </ul>
        </div>
      <div class="w3ls_recent_posts">
          <h3>Recent Posts</h3>
          @foreach($recents = \App\Post::recent() as $recent)
            <div class="agileits_recent_posts_grid">
              <div class="agileits_recent_posts_gridl">
                <div class="w3agile_special_deals_grid_left_grid">
                    <a href="/post/{{ $recent->id }}"><img src="{{ url("/storage/$recent->image") }}" class="img-responsive" alt="" /></a>
                  </div>
              </div>
              <div class="agileits_recent_posts_gridr">
                <h4><a href="/post/{{ $recent->id }}">{{ $recent->title }}</a></h4>
                <h5><i class="fa fa-calendar" aria-hidden="true"></i>{{{ date('Y-m-d', strtotime($recent->created_at)) }}}</h5>
              </div>
              <div class="clearfix"> </div>
            </div>
          @endforeach
        </div>
      <div class="w3l_tags">
          <h3>Tags</h3>
          <ul class="tag">
            <li><a href="/php">PHP</a></li>
            <li><a href="/magento2">Magento2</a></li>
            <li><a href="/magento1">Magento</a></li>
            <li><a href="/laravel">Laravel</a></li>
            <li><a href="/linux">Linux</a></li>
            <li><a href="/pro-tips">Quick Tips</a></li>
          </ul>
        </div>
      </div>
      <!-- //btm-wthree-right -->