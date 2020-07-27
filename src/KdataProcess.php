<?php

use Illuminate\Support\Facades\App;
use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\IOFactory;

use KunicMarko\Importer\ImporterFactory;


// declare(strict_types=1);

namespace Roba\DataProcessor;

/**
 * Class DataProcess
 * @package App\Services
 */
class KdataProcess
{
    /**
     * @param array $coins - all coins listed on exchange 
     *
     * @return o
     */
    public function load($file_path)
    //~/Documents/Order_205131.xls (for testing)
    {
      dump('in load: '.$file_path);

      $importerFactory = App::make(KunicMarko\Importer\ImporterFactory::class);

      $importer = $importerFactory->getImporter('csv');
      





      // $in_file = $file_path;
      // $out_file = 'outputfile.csv';

      // if( !$fr = @fopen($in_file, "r") ) die("Failed to open file");

      // $fw = fopen($out_file, "w");

      // while( ($data = fgetcsv($fr, 1000, ",")) !== FALSE ) {

      // foreach( array_keys($data) as $key )


      // $data[$key] = '"' . str_replace('"', '""', $data[$key]) . '"';

      // $line = implode(",", $data) . "n";

      // fwrite($fw, $line);
      // }

      // fclose($fr);

      // fclose($fw);

      }



}