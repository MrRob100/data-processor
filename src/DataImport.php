<?php

namespace Roba\DataProcessor;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;

class DataImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {
        dump('in data import');
        dump($collection[0]);
        // dump($collection[1]);
        // dump($collection[2]);

        // foreach ($collection as $row) {
        //     dump($row);
        // }
    }
}
