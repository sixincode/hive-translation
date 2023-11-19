<?php
// Temporary until Livewire gets the new system for Wireable properties
if(! function_exists('getLocaleName')) {
  function getLocaleName()
  {
    return config('hive-translation.supportedLocales.'.substr(app()->getLocale(),0,2).'.native');
  }
}

if(! function_exists('getLangName')) {
  function getLangName($lang)
  {
    return config('hive-translation.supportedLocales.'.$lang.'.native','');
  }
}

function check_if_translations()
{
  if(function_exists('has_translations')) {
      return has_translations();
  }else{
      return false;
  }
}

function check_lang_route()
{
  if(function_exists('lang_route')) {
      return lang_route();
  }else{
      return config('hive-translation.default_route');
  }
}

function check_locale_langs()
{
  if(function_exists('locale_langs')) {
      return locale_langs();
  }else{
      return array_keys(config('hive-translation.supportedLocales'));
  }
}

function check_default_lang()
{
  if(function_exists('default_lang')) {
      return default_lang();
  }else{
      return config('hive-translation.fallback_lang');
  }
}
