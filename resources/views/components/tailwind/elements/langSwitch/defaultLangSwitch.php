@props([
    'title' => '',
    'icon' => 'translation',
    'route' => '',
    'align' => '',
    'values' => [
        'en',
        'fr'
    ],
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
  }
@endphp
<div class="text-white/60 flex space-x-2 items-center">
  <button type="button" class="font-semibold">
    Français
  </button>
  <span class="font-bold">|</span>
  <button type="button" class="rounded-full">
    <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
      <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
    </svg>
  </button>
</div>

<!-- <x-hive-display-dropdown>
  <x-slot name="trigger">
    <button
        type="button"
        class="flex items-center gap-4 bg-white/20 hover:bg-white/80 hover:text-gray-800 text-gray-300 px-5 py-1.5 rounded-md "
    >
    <x-hive-form-icon
    path='{{$icon}}'
    width='6'
    height='6'
    class=' '
    />
  </button>
  </x-slot>
  <x-slot name="content">
    <div class="grid divide-slate-200">
      @foreach($values as $value)
        <a href="?{{check_lang_route()}}={{$value}}" class="hover:bg-slate-50">
          {{config('hive-helpers-translations.supportedLocales["value"]["native"]')}}
        </a>
      @endforeach
    </div>
  </x-slot>
</x-hive-display-dropdown> -->
