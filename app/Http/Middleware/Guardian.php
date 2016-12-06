<?php

namespace Futbol\Http\Middleware;

use Closure;
use Futbol\Models\Auditory;

class Guardian
{
  /**
   * Run the request filter.
   *
   * @param  \Illuminate\Http\Request  $request
   * @param  \Closure  $next
   * @return mixed
   */
  public function handle($request, Closure $next)
  {

      $path = $request->path();
      $user = $request->user();
      $data = $request->all();

      $auditory = new Auditory;
      $auditory->path = $path;
      $auditory->data = json_encode($data);
      $auditory->save();

      return $next($request);
  }

    public function auditar($request){
      echo "ALL";
      var_dump($request->all());
        echo "user";
      var_dump($request->user());
        echo "path";
      var_dump($request->path());
    }
}
