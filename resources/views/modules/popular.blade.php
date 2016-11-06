<div class="panel-heading">
	<h3 class="panel-title"><i class="fa fa-star-o text-primary"></i> Популярные ссылки</h3>
</div>

<div class="panel-body">
	<ul class="list-icons">
		@foreach ($popular as $item)
		<li><i class="fa fa-hand-o-right"></i>{{ $item->title }}</li>
		@endforeach
	</ul> 
</div>
