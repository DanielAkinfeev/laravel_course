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
                    <li><a @if(URL::previous() == '/places/create') style="font-style: italic" @endif href="/places/create">Добавить место</a></li>
                    <li><a @if(URL::previous() == '/photos/add') style="font-style: italic" @endif href="/photos/add">Добавить фотографию к месту</a></li>
                    <li><a @if(URL::previous() == '/') style="font-style: italic" @endif href="/">Все места</a></li>
                </ul>
            </div><!--/.nav-collapse -->
        </div><!--/.container-fluid -->
    </div>
        @yield('content')
</div>