<nav class="navbar navbar-default navbar-right topmenu">
		<header class="navbar-header">
			<a class="navbar-brand" href="/">
		        <img alt="brand" src="/img/logo-small.png">
		     </a>
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-navbar-collapse-topmenu">
				<span class="sr-only">Toggle Navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
		</header>
		<div class="collapse navbar-collapse" id="bs-navbar-collapse-topmenu">


			<div name="q" class="search navbar-left">
               	<input type="text" name="search" v-model="query" value="{{ old('search') }}" class="form-control fa fa-search" placeholder=" Найти...">
				<button class="btn btn-link" type="button" @click="search()" v-if="!loading"><i class="fa fa-search"> </i></button>
				<button class="btn btn-link" type="button" disabled="disabled" v-if="loading"><i class="fa fa-search"> </i> Ищем...</button>
            </div>


			<ul class="nav">
  				@foreach ($tree as $node)  
  					@if ($node->menutype == 'topmenu')
  					<li><a href="/{{ $node->sef }}" class="{{ $node->class }} {{ Request::is($node->sef. '*') ? 'active' : '' }}"> {{ $node->title }}</a></li>
  					@endif
  				@endforeach		

			</ul>
		</div>
</nav>