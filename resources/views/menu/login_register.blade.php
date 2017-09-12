<ul class="nav navbar-nav right">
	@if (Auth::guest())
		@foreach($items as $menu_item)
	    	<li class="{{ Request::path() == $menu_item->url ? 'active' : '' }}"><a href="/{{ $menu_item->url }}">{{ $menu_item->title }}</a></li>
		@endforeach
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