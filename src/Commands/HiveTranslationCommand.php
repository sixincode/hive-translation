<?php

namespace Sixincode\HiveTranslation\Commands;

use Illuminate\Console\Command;

class HiveTranslationCommand extends Command
{
    public $signature = 'hive-translation';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
