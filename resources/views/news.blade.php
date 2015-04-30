@extends('app')

@section('content')
	@foreach($data as $post)
		<div class="posts">
			<h2 class="tit">{{ $post->title }}</h2>
 			<p>{{ $post->getTeaser() }}</p>

            <a class="read" href='{{ URL::to("posts", $post->slug) }}'>Читать далее...</a>
		</div>
	@endforeach
@endsection