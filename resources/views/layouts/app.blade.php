<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>CTF</title>

    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/css/materialize.min.css">

    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-beta/js/materialize.min.js"></script>

</head>
  <body>
    <nav style="margin-bottom:20px">
      <div class="nav-wrapper red lighten-1">
        <span class="brand-logo" style="padding-left:10%">EEEEEEEECtf</span>
        <ul id="nav-mobile" class="right hide-on-med-and-down" style="padding-right:10%">
          @guest
              <li><a href="{{ route('login') }}">Login</a></li>
              <li><a href="{{ route('register') }}">Register</a></li>
          @else
          <li><a href="/tasks">Tasks</a></li>
          <li><a href="/board">Board</a></li>
          <li>
              <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  Logout
              </a>

              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                  {{ csrf_field() }}
              </form>
          </li>
          @endguest
        </ul>
      </div>
    </nav>
    <div style="padding-left:8%;">
      @yield('content')
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
  </body>
</html>
