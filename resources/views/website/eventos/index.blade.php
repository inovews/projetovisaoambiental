@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto text-center">
			<h2 class="title">Participações e Eventos</h2>
		</div>
	</div>
	<div class="row">
		@foreach($eventos as $evento)
		<div class="col-sm-6 col-md-4">
					<div class="blog-box">
						<div class="blog-box-image">
							<img src="{{ url('uploads/'.$evento->picture) }}" class="img-responsive" alt="{{ $evento->title }}">
						</div>
						<div class="blog-box-content">
							<h4><a href="{{ route('website.eventos.show', $evento->id) }}">{{ $evento->title }}</a></h4>
							<p>{!! substr(strip_tags($evento->content), 0, 150) !!} {{ strlen(strip_tags($evento->content)) > 150 ? "..." : "" }}</p>
							<a href="{{ route('website.eventos.show', $evento->id) }}" class="btn btn-default site-btn">Veja mais...</a>
						</div>
					</div>
				</div>
		@endforeach

	</div>
</div>
@endsection