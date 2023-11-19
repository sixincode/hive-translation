<?php

namespace Sixincode\HiveTranslation\Http\Middlewares;

use Closure;

class FindLocale
{
  public function handle($request, Closure $next)
      {
          if(
              (!session('language')) &&  ($request->getPreferredLanguage() && in_array(substr($request->getPreferredLanguage(),0,2), check_locale_langs() ))
            )
          {
             session()->put('language', substr($request->getPreferredLanguage(),0,2));
             app()->setLocale(session('language'));
          }

          return $next($request);
      }
}
