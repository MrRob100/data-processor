<?php

namespace Roba\DataProcessor;

use Roba\DataProcessor\Dataprocess;
use Illuminate\Support\Facades\App;
use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider;

class DataProcessCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'load:data';


    //  {--force : Overwrite any existing files}
    //  {--all : Publish assets for all service providers without prompt}
    //  {--provider= : The service provider that has assets you want to publish}
    //  {--tag=* : One or many tags that have assets you want to publish}

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Process Data';

    /**
     * Create a new command instance.
     *
     * @param  \Illuminate\Filesystem\Filesystem  $files
     * @return void
     */
    public function __construct(Filesystem $files)
    {
        parent::__construct();

        $this->files = $files;
    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
      $process = App::make('Roba\DataProcessor\Dataprocess');
        dump("data process2!");
        $process->load();
    }

}