<?php

namespace Sixincode\HiveTranslation\Http\Livewire\Elements;

use Livewire\Component;
use Illuminate\Http\Request;

class LangSwitcher extends Component
{
    public $lang;

    public function mount()
    {
        // $this->lang = $lang;
    }

    public function mainLanding()
    {
      return view('hive-translation::central.langSwitcher');
    }
}
