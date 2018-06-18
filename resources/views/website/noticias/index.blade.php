@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="blog-section">
		<div class="container">
			<div class="row">
				<div class="site-heading text-center">
					<h3>Notícias</h3>
					<div class="border"></div>
				</div>
			</div>
			<div class="row text-center">
				@foreach($noticias as $noticia)
				<div class="col-sm-6 col-md-4">
					<div class="blog-box">
						<div class="blog-box-image">
							<img src="{{ url('uploads/'.$noticia->picture) }}" class="img-responsive" alt="{{ $noticia->title }}">
						</div>
						<div class="blog-box-content">
							<h4><a href="{{ route('website.noticias.show', $noticia->id) }}">{{ $noticia->title }}</a></h4>
							<p>{!! substr(strip_tags($noticia->content), 0, 150) !!} {{ strlen(strip_tags($noticia->content)) > 150 ? "..." : "" }}</p>
							<a href="{{ route('website.noticias.show', $noticia->id) }}" class="btn btn-default site-btn">Veja mais...</a>
						</div>
					</div>
				</div>
				@endforeach
			</div>
		</div>
	</div>
</div>
@endsection