<?php

namespace Bnussbau\TrmnlBlade\Commands;

use Illuminate\Console\Command;

class TrmnlBladeCommand extends Command
{
    public $signature = 'trmnl-blade';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
