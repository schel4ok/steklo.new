	<nav class="navbar navbar-default mainmenu">
		<div class="collapse navbar-collapse" id="bs-navbar-collapse-2">
			<ul class="nav navbar-nav">
  				@foreach ($tree as $node)  
  					@if ($node->menutype == 'mainmenu' && $node->children->isEmpty())
  					<li class="{{ Request::is($node->sef. '*') ? 'active' : '' }} {{ $node->class }}">
  					<a href="/{{ $node->sef }}">{!! $node->title !!}</a>
  					</li>

  					@elseif ($node->menutype == 'mainmenu')

  					<li class="{{ $node->class }} {{ Request::is($node->sef) ? 'dropdown active' : 'dropdown' }}" >
  					<a href="/{{ $node->sef }}" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{!! $node->title !!} <span class="caret"></span></a>

						    <ul class="dropdown-menu" role="menu">
  								@foreach ($node->children as $child)

  									<li><a href="/{{$child->parent->sef}}/{{ $child->sef }}">{{ $child->title }} </a></li>

								@endforeach
						    </ul>
  					</li>

  					@endif
  				@endforeach					
			</ul>
		</div>
</nav>
