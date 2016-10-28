<div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 messages">
  <div class="row">
		<div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                </div>
                <div class="avatar">
                    <img alt="" src="http://lorempixel.com/100/100/people/9/">
                </div>
                <div class="info">
                    <div class="title">
                        <a target="_blank" href="http://scripteden.com/">{{ $equipo->nombre_equipo }}</a>
                    </div>
                    <div class="desc">{{ $equipo-> }}</div>
                </div>
                <div class="bottom">
                    <a class="btn btn-primary btn-twitter btn-sm" href="https://twitter.com/webmaniac">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a class="btn btn-danger btn-sm" rel="publisher"
                       href="https://plus.google.com/+ahmshahnuralam">
                        <i class="fa fa-google-plus"></i>
                    </a>
                    <a class="btn btn-primary btn-sm" rel="publisher"
                       href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a class="btn btn-warning btn-sm" rel="publisher" href="https://plus.google.com/shahnuralam">
                        <i class="fa fa-behance"></i>
                    </a>
                </div>
            </div>
        </div>
	</div>
</div>
@include('layouts.error_messages.simples')
