<div class="navbar navbar-fixed-top">
	<div class="navbar-inner">
		<div class="container">
			<a class="brand pull-left" href="{{ url() }}">{{ site_title() }}</a>
			<p class="navbar-text pull-right">
				{{ Config::get('theme.right_nav_link') }}
			</p>
		</div>
	</div>
</div>
<div class="homepage-hero well container-fluid">
	<div class="container">
		<div class="row">
			<div class="text-center span12">
				@if (Config::get('theme.tagline'))
					<h2>{{ Config::get('theme.tagline') }}</h2>
				@endif
			</div>
		</div>
		<div class="row">
			<div class="span10 offset1">
				@if (Config::get('theme.image'))
					<img class="homepage-image" src="{{ theme_path(Config::get('theme.image')) }}" alt="{{ site_title() }}">
				@endif
			</div>
		</div>
	</div>
</div>
<div class="hero-buttons container-fluid">
	<div class="container">
		<div class="row">
			<div class="text-center span12">
				@if (Config::get('theme.repo'))
					<a href="https://github.com/{{Config::get('theme.repo')}}" class="btn btn-secondary btn-hero">
						View On GitHub
					</a>
				@endif
				<a href="{{ url('post/'.$docs_url)}}" class="btn btn-primary btn-hero">
					View Documentation
				</a>
			</div>
		</div>
	</div>
</div>

<div class="homepage-content container-fluid">
	<div class="container">
		<div class="row">
			<div class="span10 offset1">						
				<?php //echo $page['html'];?>
			</div>
		</div>
	</div>
</div>

<div class="homepage-footer well container-fluid">
	<div class="container">
		<div class="row">
			<div class="span5 offset1">
				@if (Config::get('theme.links'))
					<ul class="footer-nav">
					@foreach (Config::get('theme.links') as $name => $url)
						<li><a href="{{ $url }}" target="_blank">{{ $name }}</a></li>
					@endforeach
					</ul>
				@endif
			</div>
			<div class="span5">
				<div class="pull-right">
					@if (Config::get('theme.twitter'))
						@foreach (Config::get('theme.twitter') as $handle)
							<div class="twitter">
								<iframe allowtransparency="true" frameborder="0" scrolling="no" style="width:162px; height:20px;" src="https://platform.twitter.com/widgets/follow_button.html?screen_name={{ $handle }}&amp;show_count=false"></iframe>
							</div>
						@endforeach
					@endif
				</div>
			</div>
		</div>
	</div>
</div>