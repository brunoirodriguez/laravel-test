<?php

namespace Cinema\Http\Middleware;
use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;
class Admin
{
    protected $auth;
    
    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    
    public function handle($request, Closure $next)
    {
        
        if($this->auth->user()->id != 2){
            Session::flash('message-error','Sin privilegios');
            return redirect()->to('admin');
        }
        
        
        return $next($request);
    }
}
