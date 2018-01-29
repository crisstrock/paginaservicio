<?php

namespace PaginaServicio\Http\Middleware;

use Illuminate\Contracts\Auth\Guard;
use Closure;
use Session;

class Admin
{
    
    protected $auth;

    public function __construct(Guard $auth){
        $this->auth = $auth;
    }
    /*public function __construct(Guard $auth){
        $this->auth = $auth;
    }*/
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
   public function handle($request, Closure $next)
    {
        if($this->auth->user()->nombre != "Cristian"){
            Session::flash('message-error','No tienes privilegios de administrador');
            return redirect()->guest('admin');
        }
        return $next($request);
    }
}
