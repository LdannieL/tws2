<!-- header -->
    <header>
        <div class="w3layouts-top-strip">
            <div class="container">
                <div class="logo">
                    <h1><a href="/"><img src='/storage/{{Voyager::setting("logo")}}' height='52' class="pd-r-10"></a><a href="/">{{ Voyager::setting('title') }}</a></h1>
                    <p>{{ Voyager::setting('description') }}</p>
                </div>
{{--                 <div class="w3ls-social-icons">
                    <a class="facebook" href="#"><i class="fa fa-facebook"></i></a>
                    <a class="twitter" href="#"><i class="fa fa-twitter"></i></a>
                    <a class="pinterest" href="#"><i class="fa fa-pinterest-p"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-linkedin"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-google-plus"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-rss"></i></a>
                    <a class="linkedin" href="#"><i class="fa fa-behance"></i></a>
                </div> --}}
            </div>
        </div>
        <!-- navigation -->
            <nav class="navbar navbar-default">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    {{ menu('main_menu', 'menu.main') }}
                    {{-- {{ menu('login_register', 'menu.login_register') }} --}}
                </div><!-- /.navbar-collapse -->
                <div class="w3_agile_login">
                            <div class="cd-main-header">
                                <a class="cd-search-trigger" href="#cd-search"> <span></span></a>
                                <!-- cd-header-buttons -->
                            </div>
                            <div id="cd-search" class="cd-search">
                                <form action="/ssearchres" method="get">
                                {{ csrf_field() }}
                                <input type="search" placeholder="Search here" name="search" required=""/>
                                    {{-- <input v-model="keyword" name="search" type="search" placeholder="Search..." required=""> --}}
                                </form>
                            </div>
                        </div>
                        <div class="clearfix"> </div>

              </div><!-- /.container-fluid -->
            </nav>
            
        <!-- //navigation -->
    </header>
    <!-- //header -->
