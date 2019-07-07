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
            <li><a href="#" data-toggle="modal" data-target="#login">Login</a></li>
		</ul>
	</div>
</nav>
