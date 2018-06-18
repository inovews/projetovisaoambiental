@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<h2 class="title">Projeto Visão Ambiental</h2>
			<h5 class="description">Somos professores temos a visão que podemos fazer nossa parte como educadores na disseminação de conhecimento e atitudes de
				visão e sustentabilidade ambiental.
			</h5>
		</div>
	</div>
	<div class="row">
		@foreach($colaboradores as $colaborador)
		<div class="col-md-4">
			<div class="panel">
				<div class="row">
					<div class="col-md-4">
						<div class="panel-body">
							<div class="panel-header panel-header-image">
								<img class="img" src="{{ url('uploads/'.$colaborador->picture) }}" class="img-responsive" alt="{{ $colaborador->name }}" width="125">
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="panel-body">
							<h4 class="panel-title">{{ $colaborador->name }}</h4>
							<p class="panel-description">
								{!! substr(strip_tags($colaborador->content), 0, 150) !!} {{ strlen(strip_tags($colaborador->content)) > 150 ? "..." : "" }}
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
		@endforeach
	</div>
</div>

@endsection