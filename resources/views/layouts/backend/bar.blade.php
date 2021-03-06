<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/backend">Backend Futbol Pelussa</a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <ul class="nav navbar-nav navbar-right">
        <img src="{{ $userInfo->img }}" class="img-circle">
        {{ $userInfo->name }}
        @section('name', $userInfo->name)

        <li><a href="/backend/settings">Settings</a></li>
        <li><a href="/backend/profile">Profile</a></li>
        <li><a href="/backend/help">Ayuda</a></li>
        @if (!Auth::guest())
          <li><a href="/backend/logout">Salir</a></li>
        @endif
      </ul>
    </div>
  </div>
</nav>
