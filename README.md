# ahmadarif/example

[![Software License][ico-license]](LICENSE.md)

Simple composer library for dummy (like Me).


## Install

Via Composer

``` bash
$ composer require ahmadarif/example
```

Then add the service provider in `config/app.php`:

```php
AhmadArif\Example\ExampleServiceProvider::class,
```

And then, add the facade of this package to the $aliases array:

```php
'Example' => AhmadArif\Example\Facade\Example::class,
```

## Usage

``` php
Route::get('/', function () {
    return Example::sayHello();
});
```

## Security

If you discover any security related issues, please email ahmad.arif019@gmail.com instead of using the issue tracker.

## Credits

- [Ahmad Arif][link-author]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[link-author]: https://github.com/ahmadarif
