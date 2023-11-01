<?php

namespace Coleus\System\Commands;

use Illuminate\Console\Command;

class SystemCommand extends Command
{
    public $signature = 'system';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
