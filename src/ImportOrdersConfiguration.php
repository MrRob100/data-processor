<?php

namespace Roba\DataProcessor;

use KunicMarko\Importer\BeforeImport;
use KunicMarko\Importer\ImportConfiguration;
use Iterator;


// class ImportOrdersConfiguration
class ImportOrdersConfiguration implements ImportConfiguration, BeforeImport
{
  public function before(Iterator $items, array $additionalData): Iterator
  {
    //start from 2nd line
    $items->next();

    return $items;
  }

  public function map()
  {
    //
  }

  public function save()
  {
    //
  }
}