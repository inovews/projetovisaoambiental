@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		@if ($noticia)
		<div class="col-md-12">
			<div class="blog-box">
				<div class="col-md-12">
					<h3>{{ $noticia->title }}</h3>
					<p>{{ $noticia->created_at->format('M d,Y \a\t h:i a') }} </p>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<img src="{{ url('uploads/'.$noticia->picture) }}" class="img-responsive" alt="{{ $noticia->title }}">
					</div>
					{!!html_entity_decode($noticia->content)!!}
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection