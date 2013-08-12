<div class="container-fluid fluid-height wrapper">
<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<a class="brand pull-left" href="{{ url() }}">{{ site_title() }}</a>
		<p class="navbar-text pull-right">
			{{ Config::get('theme.right_nav_link') }}
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
				<!-- Links -->
				@if (Config::get('theme.links'))
					@foreach (Config::get('theme.links') as $name => $url)
					<a href="{{ $url }}" target="_blank">{{ $name }}</a><br>
					@endforeach
				@endif
				<!-- Twitter -->
				@if (Config::get('theme.twitter'))
					@foreach (Config::get('theme.twitter') as $handle)
						<div class="twitter">
						<hr/>
							<iframe allowtransparency="true" frameborder="0" scrolling="no" style="width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name={{ $handle }}&amp;show_count=false"></iframe>
						</div>
					@endforeach
				@endif
		</div>
	</div>
	<div class="right-column {{ Config::get('theme.float') ? 'float-view':'' }} content-area span9">
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