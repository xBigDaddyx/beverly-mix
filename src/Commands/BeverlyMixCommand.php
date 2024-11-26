<?php

namespace Xbigdaddyx\BeverlyMix\Commands;

use Illuminate\Console\Command;

class BeverlyMixCommand extends Command
{
    public $signature = 'beverly-mix';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
