<div class="container-fluid fluid-height wrapper">
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<a class="brand pull-left" href="{{ url() }}">{{ site_title() }}</a>
		<p class="navbar-text pull-right">
			Generated by <a href="http://daux.io">Daux.io</a>
		</p>
	</div>
</div>
<div class="row-fluid columns content">
	<div class="left-column article-tree span3">
		<!-- For Mobile -->
		<div class="responsive-collapse">
			<button type="button" class="btn btn-sidebar" id="menu-spinner-button">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		    </button>
		</div>
		<div id="sub-nav-collapse" class="sub-nav-collapse">
			<!-- Navigation -->
			<ul class="nav nav-list">
				@foreach (Wardrobe::tags() as $item)
				  @if ($item['tag'] != "")
				    <li><a href="#" class="aj-nav folder">{{ $item['tag'] }}</a></li>
				  @endif
				@endforeach
			</ul>
		</div>
		<div class="well well-sidebar">

		</div>
	</div>
	<div class="right-column content-area span9">
		<div class="content-page">
			<article>
					<div class="page-header">
						<h1>{{ $post->title }}</h1>
					</div>
				    {{ $post->parsed_content }}
			</article>
		</div>
	</div>
</div>
</div>