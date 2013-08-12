@extends(theme_path('layout'))

@section('title')
  {{ $post->title }} | {{ site_title() }}
@stop

@section('content')
	<?php 
	$tree = array();
		foreach (Wardrobe::posts() as $item){
		  $post_tag = $item->tags()->lists('tag');
		  foreach ($post_tag as $tag){
		  	$tree[$tag][]=link_to('post/'.$item->slug, $item->title);
		  }
		}
	?>
	@include(theme_path('inc.content'))
	@include(theme_path('inc.tracking'))
@stop