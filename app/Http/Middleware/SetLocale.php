<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    private const SUPPORTED = ['aa', 'am', 'en'];

    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale') ?? 'aa';

        if (in_array($locale, self::SUPPORTED, true)) {
            app()->setLocale($locale);
            session()->put('locale', $locale);
        }

        return $next($request);
    }
}
