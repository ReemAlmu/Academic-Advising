<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;


class CheckDay
{
    /**
     * Handle an incoming request.
     *
     * @param  Request  $request
     * @param Closure $next
     * @return mixed
     */
    public function handle($request, Closure $next){



        $today = date ('D') ;
        if ($today != "Sun"){

           return  redirect()->to ('system-clos');
        }


        return $next ($request);

    }};

