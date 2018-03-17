@extends('layouts.websites')

@section('content')
<div class="container">
	<div class="col-md-8">
		<div class="row pb-3">
			@foreach($publicacoes as $publicacoe)
			<div class="col-md-6">
				<div class="news">
					<figure>
						<a href="{{ route('website.publicacao.show', $publicacoe->id) }}">
							<img src="{{ url('uploads/'.$publicacoe->picture) }}" class="img-responsive" alt="{{ $publicacoe->title }}">
						</a>
					</figure>
					<div class="media mt-2">
						<div class="media-left">
							<div class="date bg-primary">
								<strong>{{ date('d', strtotime($publicacoe->created_at)) }}</strong> {{ date('M , Y', strtotime($publicacoe->created_at)) }}
							</div>
						</div>
						<div class="media-body">
							<h4 class="media-heading text-primary">{{ $publicacoe->title }}</h4>
							<div class="text limit">
								<p>{!! substr(strip_tags($publicacoe->content), 0, 75) !!} {{ strlen(strip_tags($publicacoe->content)) > 75 ? "..." : "" }}</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			@endforeach
		</div>
	</div>
</div>
@endsection