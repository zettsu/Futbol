@include('layouts.backend.head')
  <body>
    @include('layouts.backend.bar')
    <div class="container-fluid">
      <div class="row">
        @include('layouts.backend.sidebar')
        <div id="content"></div>
        <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 messages">
          @include('layouts.error_messages.simples')
        </div>
      </div>
    </div>
    @include('layouts.backend.footer')
  </body>
</html>
