<?php

namespace Roba\DataProcessor;

use Illuminate\Console\Command;
use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Support\ServiceProvider;
use League\Flysystem\Adapter\Local as LocalAdapter;
use League\Flysystem\Filesystem as Flysystem;
use League\Flysystem\MountManager;

class DataProcessCommand extends Command
{
    /**
     * The filesystem instance.
     *
     * @var \Illuminate\Filesystem\Filesystem
     */
    protected $files;

    /**
     * The provider to publish.
     *
     * @var string
     */
    protected $provider = null;

    /**
     * The tags to publish.
     *
     * @var array
     */
    protected $tags = [];

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'vendor:publish {--force : Overwrite any existing files}
                    {--all : Publish assets for all service providers without prompt}
                    {--provider= : The service provider that has assets you want to publish}
                    {--tag=* : One or many tags that have assets you want to publish}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Publish any publishable assets from vendor packages';

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
        dump("data process!");
    }

}