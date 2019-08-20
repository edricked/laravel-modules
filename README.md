# Laravel-Modules

[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Total Downloads](https://img.shields.io/packagist/dt/larabile/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/larabile/laravel-modules)

| **Laravel**  |  **laravel-modules** |
|---|---|
| 5.8  | ^1.0  |


`larabile/laravel-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 5.

## Install

To install through Composer, by run the following command:

``` bash
composer require larabile/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Larabile\Modules\LaravelModulesServiceProvider"
```

### Autoloading

By default the module classes are not loaded automatically. You can autoload your modules using `psr-4`. For example:

``` json
{
  "autoload": {
    "psr-4": {
      "App\\": "app/",
      "Modules\\": "Modules/"
    }
  }
}
```

**Tip: don't forget to run `composer dump-autoload` afterwards.**

## Documentation

Coming soon!!!
## About Edrick Agoncillo

Edrick Agoncillo is a Software Engineer specialising on the Laravel framework.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
