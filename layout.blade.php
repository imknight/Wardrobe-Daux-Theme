<!doctype html>
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <title>@yield('title')</title>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="description" content="{{ Config::get('theme.description') }}" />
  <meta name="author" content="{{ site_title() }}">
  @if (Config::get('theme.theme'))
  <link rel="icon" href="{{ url(theme_path('img/favicon-'.Config::get('theme.theme').'.png')) }}" type="image/x-icon">
  @else
  <link rel="icon" href="{{ url(theme_path('img/favicon.png')) }}" type="image/x-icon">
  @endif
  <!-- Mobile -->
  <meta name="apple-mobile-web-app-capable" content="yes" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Font -->
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700,300,100' rel='stylesheet' type='text/css'>

  <link rel="stylesheet" href="{{ url(theme_path('css/daux-'.Config::get('theme.theme').'.css')) }}">

  <!-- hightlight.js -->
  <script src="{{ url(theme_path('js/highlight.min.js')) }}"></script>
  <script>hljs.initHighlightingOnLoad();</script>

  <!-- Navigation -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.0/jquery.min.js"></script>
  <script src="{{ url(theme_path('js/bootstrap.min.js')) }}"></script>
  <script src="{{ url(theme_path('js/custom.js')) }}"></script>
  <!--[if lt IE 9]>
  <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
  <![endif]-->
</head>
<body>
  @yield('content')
</body>
</html>
