<?php

namespace Sixincode\HiveTranslation\Components\Elements;

use Sixincode\HiveDisplay\Components\Base\CardTemplateElement;

class LangSwitch extends CardTemplateElement
{
    public function setDefaultSource()
    {
      return $this->source = config('hive-display.defaultViews.langSwitchSource');
    }

    public function setDefaultComponent()
    {
      return $this->component = config('hive-display.defaultViews.defaultLangSwitch');
    }

    public function setDefaultBase()
    {
      return $this->base = config('hive-display.defaultViewsBase');
    }
}
