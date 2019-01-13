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
                    <li><a @if(URL::current() == URL::route('pictures.create')) style="color: red" @endif href="{{URL::route('create')}}">@lang('messages.add_place')</a></li>
                    <li><a @if(URL::current() == URL::route('pictures.create')) style="color: red" @endif href="{{URL::route('photo_add_places')}}">@lang('messages.add_picture')</a></li>
                    <li><a @if(URL::current() == URL::route('places')) style="color: red" @endif href="{{URL::route('places')}}">@lang('messages.all_places')</a></li>
                    <li><a @if(URL::current() == URL::route('rate')) style="color: red" @endif href="{{URL::route('rate')}}">@lang('messages.places_rate')</a></li>
                    <li><a href="{{URL::route('places', ['locale' => 'ru'])}}">ru</a></li>
                    <li><a href="{{URL::route('places', ['locale' => 'en'])}}">en</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
        @yield('content')
</div>