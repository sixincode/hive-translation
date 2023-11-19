<?php

namespace Sixincode\HiveTranslation\Components\Elements;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class LangSwitcher extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-translation.langSwitchSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-translation.defaultLangSwitch');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-translation.defaultViewsBase');
    }
}
