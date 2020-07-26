# `vendor:publish` for Lumen framework

This package contains a single command borrowed from the Laravel framework that enables you to use `php artisan vendor:publish` in your Lumen application.

[![Become a Patron](https://img.shields.io/badge/Become%20a-Patron-f96854.svg?style=for-the-badge)](https://www.patreon.com/laravelista)

## Overview

This package contains a copy of the class from [`Illuminate/Foundation/Console/VendorPublishCommand`](https://github.com/laravel/framework/blob/6.x/src/Illuminate/Foundation/Console/VendorPublishCommand.php).

**This repository now follows the Lumen framework versioning.** Use the appropriate version of this package for your Lumen application. _eg. Lumen ^5.5 -> LumenVendorPublish ^5.5. etc._

## Installation

```
composer require roba/data-processor
```

## Usage

To be able to use it you have to add it to your `app/Console/Kernel.php` file:

```
protected $commands = [
    \Laravelista\LumenVendorPublish\DataProcessCommand::class
];
```