<head>
    <title>@yield('title')</title>
    <meta name="_token" content="{{ csrf_token() }}"/>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<div class="container">
    <div class="navbar navbar-default" role="navigation">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav">
                    <li><a @if(URL::current() == URL::route('create')) style="color: red" @endif href="{{URL::route('create')}}">Добавить место</a></li>
                    <li><a @if(URL::current() == URL::route('photo_add_places')) style="color: red" @endif href="{{URL::route('photo_add_places')}}">Добавить фотографию к месту</a></li>
                    <li><a @if(URL::current() == URL::route('places')) style="color: red" @endif href="{{URL::route('places')}}">Все места</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
        @yield('content')
</div>