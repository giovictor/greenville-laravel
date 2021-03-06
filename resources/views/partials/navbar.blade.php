<nav class="navbar navbar-default navbar-static-top" id="gvcnavbar">
	<div class="navbar-header">
		<a href={{route('homepage')}} class="navbar-brand">
			<span><img src={{asset('img/gvclogo.png')}} id="gvclogo"></span>
			Greenville College Library
		</a>
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#gvcnavbarcollapse">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		</button>
	</div>
	<div class="collapse navbar-collapse" id="gvcnavbarcollapse">
		<ul class="nav navbar-nav navbar-right" id="navbarright">
            <li><a href={{route('homepage')}}>HOME</a></li>
            <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    Collections
                    <div class="caret"></div>
                </a>
                <ul class="dropdown-menu">
                    @foreach($classifications as $classification)
                        <li><a href={{route('collections',['id'=>$classification->classificationID])}}>{{$classification->classification}}</a></li>
                    @endforeach
                </ul>
            </li>
            @if(Auth::check())
                <li>
                    <a href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                                    document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            @else
                <li><a href={{route('login')}}>Login</a></li>
            @endif
		</ul>
	</div>
</nav>
