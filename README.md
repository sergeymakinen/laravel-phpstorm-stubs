# Laravel PhpStorm autocomplete stubs

Stubs for PhpStorm (may be for some other IDEs as well) to get a code completion working for Laravel facades, Query/Eloquent builders. Requires Laravel 5.1 or higher.

[![Packagist Version](https://img.shields.io/packagist/v/sergeymakinen/laravel-phpstorm-stubs.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/laravel-phpstorm-stubs) [![Total Downloads](https://img.shields.io/packagist/dt/sergeymakinen/laravel-phpstorm-stubs.svg?style=flat-square)](https://packagist.org/packages/sergeymakinen/laravel-phpstorm-stubs) [![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)

## Installation

The preferred way to install this extension is through [composer](https://getcomposer.org/download/).

Either run

```bash
composer require "sergeymakinen/laravel-phpstorm-stubs:^1.0"
```

or add

```json
"sergeymakinen/laravel-phpstorm-stubs": "^1.0"
```

to the require section of your `composer.json` file.

## Notes

If you got no code completion on Eloquent models, add a Model mixin tag, see an example:

```php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

/**
 * @mixin Model
 */
class User extends Model implements AuthenticatableContract, CanResetPasswordContract
{
    // ...
}

```

Have fun!
