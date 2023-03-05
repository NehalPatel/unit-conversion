<?php

namespace NehalPatel\UnitConversion\Commands;

use Illuminate\Console\Command;

class UnitConversionCommand extends Command
{
    public $signature = 'unit-conversion';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
