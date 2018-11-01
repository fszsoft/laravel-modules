# Laravel-Modules

[![Latest Version on Packagist](https://img.shields.io/packagist/v/nwidart/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/nwidart/laravel-modules)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status](https://img.shields.io/travis/nWidart/laravel-modules/master.svg?style=flat-square)](https://travis-ci.org/nWidart/laravel-modules)
[![Scrutinizer Coverage](https://img.shields.io/scrutinizer/coverage/g/nWidart/laravel-modules.svg?maxAge=86400&style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-modules/?branch=master)
[![SensioLabsInsight](https://img.shields.io/sensiolabs/i/25320a08-8af4-475e-a23e-3321f55bf8d2.svg?style=flat-square)](https://insight.sensiolabs.com/projects/25320a08-8af4-475e-a23e-3321f55bf8d2)
[![Quality Score](https://img.shields.io/scrutinizer/g/nWidart/laravel-modules.svg?style=flat-square)](https://scrutinizer-ci.com/g/nWidart/laravel-modules)
[![Total Downloads](https://img.shields.io/packagist/dt/nwidart/laravel-modules.svg?style=flat-square)](https://packagist.org/packages/nwidart/laravel-modules)

| **Laravel**  |  **laravel-modules** |
|---|---|
| 5.4  | ^1.0  |
| 5.5  | ^2.0  |
| 5.6  | ^3.0  |
| 5.7  | ^4.0  |

`nwidart/laravel-modules` is a Laravel package which created to manage your large Laravel app using modules. Module is like a Laravel package, it has some views, controllers or models. This package is supported and tested in Laravel 5.

This package is a re-published, re-organised and maintained version of [pingpong/modules]

## Install

To install through Composer, by run the following command:

``` bash
composer require nwidart/laravel-modules
```

The package will automatically register a service provider and alias.

Optionally, publish the package's configuration file by running:

``` bash
php artisan vendor:publish --provider="Fszsoft\Modules\LaravelModulesServiceProvider"
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

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
