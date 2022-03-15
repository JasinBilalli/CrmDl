<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class confirmedcode
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $user = auth();
        if ($user->check()) {
<<<<<<< HEAD
            
=======
>>>>>>> 7ebe3dfe01d830bbb8613a2ad84a385d9dfd8953
            return $next($request);
        }
        return redirect()->route('rnlogin');
    }
}
