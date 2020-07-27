# `Data Processor`

## Description

Loads xls file and processes data into csv ready for database

## Installation

```
composer require roba/data-processor 
```


To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    \Roba\DataProcessor\DataProcessCommand::class
];
```

The excel package class has to be made available:

### Lumen

add the following line of code to bootstrap/app.php

```

$app->register(Maatwebsite\Excel\ExcelServiceProvider::class);

```

### Laravel

add the following like of code to config/app.php

```
'providers' => [
 /*
 * Package Service Providers…
 */
 Maatwebsite\Excel\ExcelServiceProvider::class
]

```

## Usage

```
php artisan load:data /path/to/data_file.xls
```

