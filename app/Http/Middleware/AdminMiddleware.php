<?php
namespace App\Http\Middleware;

//use Auth;
use Closure;
use App\Models\User;
use Illuminate\Http\Request;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */

     public function handle(Request $request, Closure $next)
     {
        if(auth()->user()->role_id == '1'){  // User::where('role_id' 1);
            return $next($request);
        }else{
            return redirect()->back();
        }
     }
}





