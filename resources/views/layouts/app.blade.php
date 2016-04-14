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
        <nav class="navbar navbar-default">
          <a class="navbar-brand" href="/">{{ trans('text.projectflyer')}}</a>
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="/">{{ trans('text.home')}} <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.about')}}</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">{{ trans('text.contact')}}</a>
            </li>
          </ul>

          <ul class="nav navbar-nav navbar-right padding-r20">
            <!-- Authentication Links -->
            @if (Auth::guest())
                <li>{{ link_to('/login', trans('text.login')) }}</li>
                <li>{{ link_to('/register', trans('text.register')) }}</li>
            @else
                <p class="navbar-text">{{ trans('text.hello') }}</p>
                <li class="dropdown pull-right">
                    {!! Html::decode(link_to('#', Auth::user()->name . '<span class="caret"></span>', [
                            'class' => 'dropdown-toggle',
                            'data-toggle' =>'dropdown',
                            'role' => 'button',
                            'aria-expanded' => 'false'
                        ])) !!}

                    <ul class="dropdown-menu" role="menu">
                        <li>
                            {!! Html::decode(link_to('/logout', '<i class="fa fa-btn fa-sign-out"></i>' . trans('text.logout'))) !!}
                        </li>
                    </ul>
                </li>
            @endif
        </ul>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </body>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ url('/js/all.js') }}"></script>
    @yield('scripts.footer')
    @include('layouts.flash')
</html>
