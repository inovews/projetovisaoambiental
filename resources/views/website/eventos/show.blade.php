@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="row">
		@if ($evento)
		<div class="col-md-12">
			<div class="blog-box">
				<div class="col-md-12">
					<h3>{{ $evento->title }}</h3>
					<p>{{ $evento->created_at->format('M d,Y \a\t h:i a') }} </p>
				</div>
				<div class="panel-body">
					<div class="col-md-6">
						<img src="{{ url('uploads/'.$evento->picture) }}" class="img-responsive" alt="{{ $evento->title }}">
					</div>
					{!!html_entity_decode($evento->content)!!}
				</div>
			</div>
		</div>
	</div>
	@endif
</div>
@endsection