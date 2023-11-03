<?php

use Sixincode\HiveTranslation\Components as Components;
use Sixincode\HiveTranslation\Http\Livewire   as Livewires;

// config for Sixincode/HiveTranslation Components
return [
    'blade' => [
      'lang-switch'   => Components\Elements\LangSwitch::class,
    ],
    'livewire' => [
      'lang-switch'   => Livewires\Elements\LangSwitcher::class,
    ],
    'prefix' => 'hive-translation',
];
