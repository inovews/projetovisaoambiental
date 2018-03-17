@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		@if ($publicacao)
		<div class="col-md-12">
			<div class="blog-box">
				<div class="col-md-12">
					<h3>{{ $publicacao->title }}</h3>
					<p>{{ $publicacao->created_at->format('M d,Y \a\t h:i a') }} </p>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<img src="{{ url('uploads/'.$publicacao->picture) }}" class="img-responsive" alt="{{ $publicacao->title }}">
					</div>
					{!!html_entity_decode($publicacao->content)!!}
					<div class="col-md-6">
						<div class="row">
							Download aqui: <a class="btn btn-info" href="{{ $publicacao->download }}" role="button">Baixar</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection