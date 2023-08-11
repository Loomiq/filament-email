![](https://banners.beyondco.de/filament-email.png?theme=light&packageManager=composer+require&packageName=loomiq%2Ffilament-email&pattern=architect&style=style_1&description=Log+emails+in+your+Filament+project&md=1&showWatermark=0&fontSize=100px&images=https%3A%2F%2Flaravel.com%2Fimg%2Flogomark.min.svg)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/loomiq/filament-email.svg?style=flat-square)](https://packagist.org/packages/loomiq/filament-email)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/loomiq/filament-email/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/loomiq/filament-email/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/loomiq/filament-email/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/loomiq/filament-email/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/loomiq/filament-email.svg?style=flat-square)](https://packagist.org/packages/loomiq/filament-email)

Control everything regarding emails with one plugin.
## Installation

You can install the package via composer:

```bash
composer require loomiq/filament-email
```

Publish and run the migrations with

```bash
php artisan vendor:publish --tag="filament-email-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-email-config"
```

Register the plugin through your panel service provider:

```php
// add this within return $panel:
->plugin(\Loomiq\FilamentEmail\FilamentEmailPlugin::make())
```


## Testing

```bash
composer test
```
## Screenshots
![](screenshots/tableview.jpg)

## Credits

- [Rick de Boer](https://github.com/RickDBCN)
- [Thijmen Kort](https://github.com/ThijmenKort)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
