<?php

namespace App\Http\Middleware;

use Closure;

class CheckIfAdminRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */

    private function respondToUnauthorizedRequest($request)
    {
        if ($request->ajax() || $request->wantsJson()) {
            return response(trans('backpack::base.unauthorized'), 401);
        } else {
            return redirect()->guest(backpack_url('login'));
        }
    }

    public function handle($request, Closure $next)
    {
        if (backpack_auth()->guest()) {
            return response()->view('errors.unauthorized');
        }

        if (!backpack_user()->hasRole('admin')) {
            return response()->view('errors.unauthorized');
        }

        return $next($request);
    }
}
