@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 ml-auto mr-auto text-center">
			<h2 class="title">Parceiros dos Projeto</h2>
		</div>
	</div>
	<div class="row">
		@foreach($parceiros as $parceiro)
		<div class="col-md-5 ml-auto">
			<div class="panel panel-plain">
				<a href="#{{ $parceiro->faculdade }}">
					<div class="panel-header panel-header-image">
						<img class="img img-responsive" src="{{ url('uploads/'.$parceiro->picture) }}" alt="{{ $parceiro->name }}" width="300">
					</div>
				</a>
				<div class="panel-body ">
					<h6 class="card-category">{{ $parceiro->name }}</h6>
					<a href="#{{ $parceiro->faculdade }}">
						<h4 class="panel-title">{{ $parceiro->faculdade }}</h4>
					</a>
					<p class="panel-description">
						{!! substr(strip_tags($parceiro->content), 0, 150) !!} {{ strlen(strip_tags($parceiro->content)) > 150 ? "..." : "" }}
					</p>
				</div>
			</div>
		</div>
		@endforeach

	</div>
</div>
@endsection