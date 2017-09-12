<ul class="nav navbar-nav">
	@foreach($items as $menu_item)
		<?php $submenus = Voyager::model('MenuItem')->where('parent_id', $menu_item->id)->orderBy('order', 'desc')->get(); ?>
		@if(count($submenus))
			<li class="dropdown {{ Request::path() == $menu_item->url ? 'active' : '' }}">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $menu_item->title}} <span class="caret"></span></a>
				<ul class="dropdown-menu">
					@foreach($submenus as $submenu)
						<li><a href="/{{ $submenu->url }}">{!! $submenu->title !!}</a></li>
					@endforeach
				</ul>
            </li>
		@else
    		<li class="{{ Request::path() == $menu_item->url ? 'active' : '' }}"><a href="/{{ $menu_item->url }}">{!! $menu_item->title !!}</a></li>
    	@endif
	@endforeach
	@if (Auth::guest())
        <li class="{{ Request::path() == '/login' ? 'active' : '' }}"><a href="/login">Login</a></li>
        <li class="{{ Request::path() == '/register' ? 'active' : '' }}"><a href="/register">Register</a></li>
        {{-- {{ menu('login_register', 'menu.login_register') }} --}}
	@else
       	<li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <ul class="dropdown-menu" role="menu">
                <li>
                    <a href="{{ route('dashboard') }}">
                        My Dashboard
                    </a>
                </li>   
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                        Logout
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        {{ csrf_field() }}
                    </form>
                </li>
            </ul>
        </li>
	@endif
</ul>
