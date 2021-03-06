<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;

global $astman;

class FetchCalls extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'calls:fetch {callID}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Fetch call by ID';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     * @return mixed
     */
    public function handle($callID)
    {
			return $astman->connected();
    }
}
