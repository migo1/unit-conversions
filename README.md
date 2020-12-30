# unit conversions in php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/unit-conversions/run-tests?label=tests)](https://github.com/spatie/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)


A Package For Unit Conversions But Curently still on Kgs to Lbs


## Installation

You can install the package via composer:

```bash
composer require migo/unit-conversions
```

## Usage
```php
use Migo\UnitConversions\Weight;

Weight::fromKilograms(100)->toLbs() // returns 220.4623;
```
<!-- ```php
$skeleton = new Spatie\UnitConversions();
echo $skeleton->echoPhrase('Hello, Spatie!');
``` -->

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Robert Migot](https://github.com/migo1)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
