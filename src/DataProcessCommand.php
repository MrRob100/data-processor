<?php

namespace Roba\DataProcessor;

use App\Imports\UsersImport;
use Roba\DataProcessor\ImportOrdersConfiguration;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\App;

use Roba\DataProcessor\Dataprocess;
use Maatwebsite\Excel\Facades\Excel;



use Illuminate\Support\ServiceProvider;
use KunicMarko\Importer\ImporterFactory;


class DataProcessCommand extends Command
{

    /**
     * 
     */
    public $importerFactory;

    /**
     * The console command signature.
     *
     * @var string
     */
    protected $signature = 'load:data {file_path}';


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
     * @param  KunicMarko\Importer\ImporterFactory  $importerFactory
     * @return void
     */
    public function __construct(ImporterFactory $importerFactory)
    {

        parent::__construct();


        $this->importerFactory = $importerFactory;


    }

    /**
     * Execute the console command.
     *
     * @return void
     */
    public function handle()
    {
        $file_path = $this->argument('file_path');

        // $importer = $importerFactory->getImporter('csv');

        // dump($importer);

        $this->other($file_path);

        



        // $process = App::make('Roba\DataProcessor\Dataprocess');



        // $kprocess = App::make(Roba\DataProcessor\Kdataprocess::class);


        // $kprocess->load($file_path);

        // $iof = App::make('PhpOffice\PhpSpreadsheet\IOFactory');

        // $reader = $iof::createReader("xlsx");

        // $process->load($file_path);



        // $import = App::make('Maatwebsite\Excel\Facades\Excel');

        // $import->import(new UsersImport, 'users.xlsx');

        // Excel::import(new UsersImport, 'users.xlsx');


        // $import = new UsersImport;

        // $path = '../public/Order_205131.xls';


        // $excel = App::make('Maatwebsite\Excel\Facades\Excel');

        // dump($excel);

        // $import = new UsersImport;
        // $path = $file_path;


        // $data = $excel::toArray($import, $path);
        // $data = $excel->toArray($import, $path);
        // $this->excel->toArray($import, $path);
        // $this->excel->import($import, $path);
        // $data = Excel::import($import, $path);
        // $data = Excel::toArray($import, $path);


        dump('end');
        die();

    }

    public function other($file_path) {

        $importer = $this->importerFactory->getImporter('csv');

        $importer->fromFile($file_path)
            ->useImportConfiguration(new ImportOrdersConfiguration())
            ->import();
    }

}