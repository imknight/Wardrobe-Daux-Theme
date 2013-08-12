@extends(theme_path('layout'))

@section('title')
  {{ $post->title }} | {{ site_title() }}
@stop

@section('content')
	@include(theme_path('inc.content'))
	@include(theme_path('inc.tracking'))
@stop