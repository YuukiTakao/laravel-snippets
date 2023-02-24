@section('head')
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <meta name="csrf-token" content="{{ csrf_token() }}">

  <title>@yield('title')</title>
  
  <meta name=”description” content="@yield('description')" />

  <!-- Favicons -->
  <link rel="icon" href="{{ asset('img/favicon/favicon.ico') }}" sizes="any">

  <!-- Ogps -->
  <meta property="og:url" content="https://example.com">
  <meta property="og:type" content="website">
  <meta property="og:title" content="サンプルサイト">
  <meta property="og:description" content="サンプルサイトです">
  <meta property="og:site_name" content="laravel-snippets">
  <meta property="og:image" content="{{ asset('img/ogp-sample.png') }}">
  <meta property="fb:app_id" content="">
  <meta name="twitter:card" content="summary_large_image">

  <meta name="description" content="" />
  <meta property="og:url" content="https://example.com" />
  <meta property="og:title" content="@yield('title')" />
  <meta property="og:type" content="website">
  <meta property="og:description" content="" />
  <meta property="og:image" content="https://example.com/images/foo.svg" />
  <meta name="twitter:card" content="summary" />
  <meta name="twitter:site" content="@nowledgebase" />
  <meta property="og:site_name" content="laravel-snippets" />
  <meta property="og:locale" content="ja_JP" />

  <!-- Google Search Console -->
  <meta name="google-site-verification" content="foobar" />

  <!-- Scripts -->
  @yield('add_js')

  <!-- Styles -->
  @yield('add_css')
@endsection