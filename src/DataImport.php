<?php

namespace Roba\DataProcessor;

use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use UKCounties\Counties;

class DataImport implements ToCollection
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $collection)
    {

        $collection->shift();
        $collection->shift();

        $col_names = [
            'company_name',
            'company_number',
            'address_line_1',
            'address_line_2',
            'town',
            'county',
            'postcode',
            'telephone',
            'sic_code',
            'contact_first_name',
            'contact_last_name',
        ];

        $data = [$col_names];

        $i = 0;

        foreach ($collection->unique() as $row) {
            if ($i < 7) {

                //sanitizes county field
                if (in_array(ucfirst(strtolower($row->get(5))), Counties::getCounties())) {
                    $county = strtoupper($row->get(5));
                } else {
                    $county = null;
                }

                //puts county value in county field
                if (in_array(ucfirst(strtolower($row->get(4))), Counties::getCounties())) {
                    $county = strtoupper($row->get(4));
                    $town = strtoupper($row->get(3));
                    $line_2 = null;
                } else {
                    $line_2 = strtoupper($row->get(3));
                    $county = null;
                    $town = strtoupper($row->get(4));
                }

                //moves town over if necessary
                if (is_null($row->get(4))) {
                    $town = strtoupper($row->get(3));
                }

                $data_row = [
                    strtolower($row->get(0)), //company_name
                    strval($row->get(1)), //company_number
                    strtoupper($row->get(2)), //address_line_1
                    $line_2, //address_line_2
                    $town, //town
                    $county, //county
                    strtoupper($row->get(6)), //postcode
                    intval($row->get(8)), //telephone
                    intval(explode(' ', $row->get(20))[0]), //sic_code
                    strtoupper($row->get(24)), //contact_first_name
                    strtoupper($row->get(25)), //contact_last_name
                ];

                array_push($data, $data_row);

                $i++;
            } else {

                break;
                die();
            }
        }

        //writes to csv file
        if (count($data) > 1) {
            $this->writeToCsv($data);
        }

    }

    /**
    * @param Array $data
    */
    public function writeToCsv($data) {

        $file = fopen("order".time().".csv","w");

        foreach ($data as $line) {
            fputcsv($file, $line);
        }

        fclose($file);
    }
}
