<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>San Pablo City | City Website</title>
    <link rel="icon" href="{!! asset('image/spc-logo.png') !!}"/>
    <link rel="stylesheet" href="/css/app.css">
		<script src="/js/app.js"></script>
  </head>
  <body>
    <div>
      @include('inc.navbar')
    </div>
    <div>

    </div>
    <div class="container-fluid">
    @if (Request::is('form'))
      @include('inc.showcase')
    @endif
<br>
      <div class="row">
        <div class="col-md-8 offset-md-2">
        @yield('content')
        </div>
      </div>
    </div>


  </body>
  @include('inc.footer')
</html>
