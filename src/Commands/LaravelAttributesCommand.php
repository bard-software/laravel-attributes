<?php

namespace BardSoftware\LaravelAttributes\Commands;

use Illuminate\Console\Command;

class LaravelAttributesCommand extends Command
{
    public $signature = 'laravel-attributes';

    public $description = 'My command';

    public function handle(): int
    {
        $this->comment('All done');

        return self::SUCCESS;
    }
}
