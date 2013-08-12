@extends(theme_path('layout'))

@section('title')
  {{ site_title() }}
@stop

@section('homecontent')
  @include(theme_path('inc.homecontent'))
@stop

@section('content')
  <?php
  	if (Config::get('theme.docs_url')=='default') {
  		foreach (Wardrobe::posts(array('per_page' => 1)) as $item){
  		 $docs_url = $item->slug;	
  		}
  	} else $docs_url = Config::get('theme.docs_url');
  ?>
  @include(theme_path('inc.home'))
  @include(theme_path('inc.tracking'))
@stop


