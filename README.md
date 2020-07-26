# `Data Processor`

## Installation

```
composer require roba/data-processor
```

## Usage

To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    \Roba\DataProcessor\DataProcessCommand::class
];
```