# `Data Processor`

## Description

Loads xls file and processes data into csv ready for database

## Installation

```
composer require roba/data-processor 
```


Add the following code to `app/Console/Kernel.php` for command to work:

```
protected $commands = [
    \Roba\DataProcessor\DataProcessCommand::class
];
```

The excel package class has to be made available:

### Lumen

add the following code to `bootstrap/app.php` :

```

$app->register(Maatwebsite\Excel\ExcelServiceProvider::class);

```

### Laravel

add the following code to `config/app.php` :

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

