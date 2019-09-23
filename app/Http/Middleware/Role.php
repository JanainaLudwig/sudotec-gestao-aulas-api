<?php

namespace App\Http\Middleware;

use Closure;

class Role
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next, $userType)
    {
        $user = auth()->user();

        if (!$user) {
            return response()->json('Unauthenticated', 401);
        }

        if ($user->type !== $userType)  {
            return response()->json('Unauthorized', 403);
        }

        return $next($request);
    }
}
