# unit conversions in php

[![Latest Version on Packagist](https://img.shields.io/packagist/v/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/spatie/unit-conversions/run-tests?label=tests)](https://github.com/spatie/unit-conversions/actions?query=workflow%3Arun-tests+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/spatie/unit-conversions.svg?style=flat-square)](https://packagist.org/packages/spatie/unit-conversions)


A Package For Unit Conversions But Curently still on Kgs to Lbs

<!-- ## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/package-skeleton-php.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/package-skeleton-php)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards). -->

## Installation

You can install the package via composer:

```bash
composer require migo/unit-conversions
```

## Usage
```php
use Migo\UnitConversions\Weight;

Weight::formKilograms(100)->toLbs();
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
