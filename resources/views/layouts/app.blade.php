<!DOCTYPE html>
<html lang="ja">
    <head>
        <title>@yield('title')</title>
        <!-- Compiled and minified CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">
        <!-- Compiled and minified JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>
    </head>
    <body>
        <nav>
            <div class="nav-wrapper">
                <a href="{{ url('posts/') }}" class="brand-logo"> Sample APP </a>
                <ul id="nav-mobile" class="right hide-on-med-and-down">
                    <li><a href="{{ url('posts/create') }}">New Post</a></li>
                </ul>
            </div>
        </nav>
        @yield('content')
        <!--JavaScript at end of body for optimized loading-->
        <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
</html>