@extends(theme_path('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('content')
  @include(theme_path('inc.home'))
  @include(theme_path('inc.tracking'))
@stop
