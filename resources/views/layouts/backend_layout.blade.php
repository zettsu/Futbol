@include('layouts.backend.head')
  <body>
    @include('layouts.backend.bar')
    <div class="container-fluid">
      <div class="row">
        @include('layouts.backend.sidebar')
        <div id="content"></div>

      </div>
    </div>
    @include('layouts.backend.footer')
  </body>
</html>
