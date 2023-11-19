@props([
    'title' => '',
    'icon' => 'translation',
    'route' => '',
    'align' => '',
    'values' => [],
])
@php
  switch($align){
    case 'right':
      $align = 'end';
      break;
    case 'left':
      $align = 'start';
      break;
    case 'center':
      $align = 'center';
      break;
    default:
      $align = 'center';
      break;
  };
@endphp

 <x-hive-display-dropdown>
  <x-slot name="trigger">
    <div class="text-white/60 flex space-x-2 items-center">
      <button type="button" class="inline-flex items-center gap-x-1.5 px-2.5 py-0.5 bg-slate-50/10 hover:bg-slate-50/20 rounded font-semibold">
        <svg class="h-4 w-4" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5" aria-hidden="true">
          <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 21l5.25-11.25L21 21m-9-3h7.5M3 5.621a48.474 48.474 0 016-.371m0 0c1.12 0 2.233.038 3.334.114M9 5.25V3m3.334 2.364C11.176 10.658 7.69 15.08 3 17.502m9.334-12.138c.896.061 1.785.147 2.666.257m-4.589 8.495a18.023 18.023 0 01-3.827-5.802" />
        </svg>
        {{getLocaleName()}}
      </button>
    </div>
  </x-slot>
  <x-slot name="content">
    <div class="grid divide-slate-200 text-center">
      @foreach(check_locale_langs() as $value)
        <a href="?{{check_lang_route()}}={{$value}}" class="hover:bg-gray-100 text-slate-500 hover:text-slate-700 px-2 py-1 divide divide-slate-100">
          {{getLangName($value)}}
        </a>
      @endforeach
    </div>
  </x-slot>
</x-hive-display-dropdown>
