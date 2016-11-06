	<div class="panel-heading">
		<h3 class="panel-title"><i class="fa fa-newspaper-o text-primary"></i> Последние новости</h3>
	</div>
	<div class="panel-body">
		<ul class="list-icons calendar">
		@foreach ($lastnews as $new)
        	<li><i class="fa fa-calendar"> {{ date('d M Y', strtotime($new->created_at)) }} </i> | 
        		<a href="news/{!! $new->sef !!}" class="link" title="{!! $new->title !!}">{!! $new->title !!}</a>
        	</li>
        @endforeach
        </ul> 
  	</div>


