<?php

namespace App\Http\Middleware;

use App\Blog\Categories\Category;
use Closure;

class checkCategory
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
        $count= Category::all()->count();
        if ($count == 0) {
            flash(trans('app.first you need to add categories'))->error();
            return redirect(route('categories'));
        }
        return $next($request);
    }
}
