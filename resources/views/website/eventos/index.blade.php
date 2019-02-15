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
		<div class="col-md-5 ml-auto">
			<div class="panel panel-plain">
				<a href="#{{ $evento->faculdade }}">
					<div class="panel-header panel-header-image">
						<img class="img img-responsive" src="{{ url('uploads/'.$evento->picture) }}" alt="{{ $evento->name }}" width="300">
					</div>
				</a>
				<div class="panel-body ">
					<h6 class="card-category">{{ $evento->name }}</h6>
					
					<p class="panel-description">
						{!! substr(strip_tags($evento->content), 0, 150) !!} {{ strlen(strip_tags($evento->content)) > 150 ? "..." : "" }}
					</p>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
@endsection