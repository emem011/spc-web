<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>SPC Website</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    @include('inc.navbar')

    <div class="container">
    @if (Request::is('form'))
      @include('inc.showcase')
    @endif

      <div class="row">
        <div class="col-sm-8 col-lg-8">
        @yield('content')
        </div>
        <div class="col-md-4 col-lg-4">
        @include('inc.sidebar')
        </div>
      </div>
    </div>

    <footer id="footer" class="text-center">
      <p>Copyright 2018 &copy; San Pablo City Government</p>
    </footer>
  </body>
</html>
