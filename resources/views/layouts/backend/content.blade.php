  <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
      <h2 class="sub-header">Ultimos equipos agregados</h2>
      <div class="table-responsive">
        <table class="table table-striped" style="width:40%;">
          <thead>
            <tr>
              <th>ID</th>
              <th>Nombre</th>
              <th>Pais</th>
              <th>Creado</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($content['last_equipos_added'] as $equipo)
              <tr>
                <td>{!!  $equipo->equipo_id !!}</td>
                <td><a href="{!! url('/backend/equipo/'.$equipo->equipo_id)!!}">{!!  $equipo->equipo_nombre !!}</a></td>
                <td>{!!  $equipo->pais_info->pais_nombre !!}</td>
                <td>{!!  $equipo->equipo_created !!}</td>
              </tr>
            @endforeach
          </tbody>
        </table>

        <h2 class="sub-header" style="padding-top:2%;">Ultimos partidos agregados</h2>
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>ID</th>
                <th>Equipo Local</th>
                <th>Equipo Visitante</th>
                <th>Estadio</th>
                <th>Hora inicio</th>
                <th>Hora fin</th>
                <th>Pais</th>
                <th>Creado</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($content['last_partidos_added'] as $partido)
                <tr>
                  <td><a href="{!! url('/backend/equipo/'.$partido->partido_id)!!}">{!!  $partido->partido_id !!}</a></td>
                  <td>{!!  $partido->local->equipo_nombre !!}</td>
                  <td>{!!  $partido->visitante->equipo_nombre !!}</td>

                  <td>{!!  $partido->partido_inicio !!}</td>
                  <td>{!!  $partido->partido_fin !!}</td>

                  <td>{!!  $partido->partido_created !!}</td>
                </tr>
              @endforeach
            </tbody>
          </table>
      </div>
