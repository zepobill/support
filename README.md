# ZepoBill Support

[![Latest Version on Packagist](https://img.shields.io/packagist/v/zepobill/support.svg?style=flat-square)](https://packagist.org/packages/zepobill/support)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/zepobill/support/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/zepobill/support/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/zepobill/support.svg?style=flat-square)](https://packagist.org/packages/zepobill/support)

## Installation

You can install the package via composer:

```bash
composer require zepobill/support
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="support-config"
```

This is the contents of the published config file:

```php
return [
    'models' => [
        'user' => 'App\Models\User'
    ]
];
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Mustaf Shllaku](https://github.com/msh1596)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
