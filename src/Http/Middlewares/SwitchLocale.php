<?php

namespace Sixincode\HiveTranslation\Http\Middlewares;

use Closure;

class SwitchLocale
{
  public function handle($request, Closure $next)
      {
          if(request(check_lang_route()) && array_key_exists(request(check_lang_route()), check_locale_langs()) ){
            session()->put('language', request(check_lang_route()));
            app()->setLocale(session('language'));
          }

          return $next($request);
      }
}
