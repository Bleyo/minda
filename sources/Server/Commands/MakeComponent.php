<?php

namespace App\Console\Commands;

use Illuminate\Support\Str;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Console\Command;
use App\Services\Stubber;
use App\Enum\Stub;

class MakeComponentCommand extends Command
{

    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mw:component {name}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Create Mindaweb Component';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle(Stubber $stubber)
    {
        $stubName = $this->argument('name');

        $stubValues = [
            'className' => Str::ucfirst($this->name),
            'view' => 'mindaweb::' . Str::lower($this->name)
        ];

        $stubTemplates = ['component', 'component-view'];

        /**
         * $stubber->use(Stub::BLADE)
            ->makeStub($stubName, $stubPath, $stubValues);

         */
        return Command::SUCCESS;
    }
}
