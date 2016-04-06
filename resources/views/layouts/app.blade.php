<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>{{ trans('text.projectflyer')}}</title>
        <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <link href="{{ url('/css/all.css') }}" rel="stylesheet">
        <link href="{{ url('https://cdnjs.cloudflare.com/ajax/libs/dropzone/4.3.0/dropzone.css') }}" rel="stylesheet">
    </head>
    <body>
        <nav class="navbar navbar-inverse">
          <a class="navbar-brand" href="#">{{ trans('text.projectflyer')}}</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.home')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.about')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.contact')}}</a>
            </li>
          </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script type="text/javascript" src="{{ url('/js/all.js') }}"></script>
    @yield('scripts.footer')
    @include('layouts.flash')
</html>
