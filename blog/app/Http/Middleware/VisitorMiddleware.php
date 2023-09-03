<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Session;
use App\Models\Visitor;

class VisitorMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $id = Session::get('visitorID');
        $vv = Visitor::where('id',$id)->first();
        if($id = $vv){
            return $next($request);
        }else{
            return back();
        }

    }
}
