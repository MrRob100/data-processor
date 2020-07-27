<?php

namespace Roba\DataProcessor;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use Roba\DataProcessor\DataImport;
use Illuminate\Support\ServiceProvider;

class DataProcessCommand extends Command
{
    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'load:data {file_path : Path of file to import}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Load data in xls format and convert to csv';

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $file_path = $this->argument('file_path');

        dump('in handle still 2');

        ini_set('memory_limit', 0);

        Excel::import(new DataImport, $file_path);

    }


}