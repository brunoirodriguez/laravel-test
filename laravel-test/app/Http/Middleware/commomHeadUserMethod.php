<?php

namespace Cinema\Http\Middleware;

use Closure;

use Cinema\User;
/* Aqui importamos uma livraria para poder acessár aos parámetros route.php */
use Illuminate\Routing\Route;


class commomHeadUserMethod
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
         /* Resgatamos a tabela o registro da tabela users no qual queremos trabalhar*/
        //$request->user()::find($register);
        $request->route()->getParameter('usuario');
        //$this->user = User::find($route->getParameter('usuario'));
        return $next($request);
    }
}
