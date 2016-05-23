# laravel-edmunds

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Latest Version](https://img.shields.io/github/release/dansup/laravel-edmunds.svg?style=flat-square)](https://github.com/dansup/laravel-edmunds/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This package is an unoffical [Edmunds Developer SDK](http://developer.edmunds.com/) for Laravel 5.2+

## Install

Via Composer

``` bash
$ composer require dansup/laravel-edmunds
```


You must install this service provider.

```php

// config/app.php

'providers' => [
    ...
    Dansup\Edmunds\EdmundServiceProvider::class,
    ...
];
```

This package also comes with a facade, which provides an easy way to access it.

```php

// config/app.php

'aliases' => [
  ...
    'EdmundsApi' => Dansup\Edmunds\Facades\EdmundsApi::class,
    ...
]
```

You can publish the config file of the package using artisan.

```bash
php artisan vendor:publish --provider="Dansup\Edmunds\EdmundServiceProvider"
```

The config file looks like this:
```php

return [

    /*
     * Get the Edmunds API key.
     */
    'api_key' => env('EDMUNDS_API_KEY', '1234'),
];
```

## Usage

``` php
use EdmundsApi;
$data = EdmundsApi::decodeVin('1HGCM82633A004352');
echo json_encode($data, JSON_PRETTY_PRINT);
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email [me (email in profile)](https://github.com/dansup) instead of using the issue tracker.

## Credits

- [@dansup](https://github.com/dansup)
- [All Contributors](https://github.com/dansup/laravel-edmunds/graphs/contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/dansup/laravel-edmunds.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/dansup/laravel-edmunds/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/dansup/laravel-edmunds.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/dansup/laravel-edmunds.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/dansup/laravel-edmunds.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/dansup/laravel-edmunds
[link-travis]: https://travis-ci.org/dansup/laravel-edmunds
[link-scrutinizer]: https://scrutinizer-ci.com/g/dansup/laravel-edmunds/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/dansup/laravel-edmunds
[link-downloads]: https://packagist.org/packages/dansup/laravel-edmunds
[link-author]: https://github.com/:author_username
[link-contributors]: ../../contributors
