@extends(theme_path('layout'))

@section('title')
  {{ $post->title }}
@stop

@section('content')
	@include(theme_path('inc.content'))
@stop