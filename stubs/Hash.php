<?php
/**
 * Laravel PhpStorm autocomplete stubs
 *
 * Generated on Laravel 5.3.4
 *
 * @see       https://github.com/sergeymakinen/laravel-phpstorm-stubs
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/laravel-phpstorm-stubs/blob/master/LICENSE The MIT License
 */

/**
 * Hash stub.
 *
 * @method static bool check(string $value, string $hashedValue, array $options = []) Check the given plain value against a hash.
 * @see \Illuminate\Hashing\BcryptHasher::check
 *
 * @method static string make(string $value, array $options = []) Hash the given value.
 * @see \Illuminate\Hashing\BcryptHasher::make
 *
 * @method static bool needsRehash(string $hashedValue, array $options = []) Check if the given hash has been hashed using the given options.
 * @see \Illuminate\Hashing\BcryptHasher::needsRehash
 *
 * @method static \Illuminate\Hashing\BcryptHasher setRounds(int $rounds) Set the default password work factor.
 * @see \Illuminate\Hashing\BcryptHasher::setRounds
 *
 */
class Hash extends \Illuminate\Support\Facades\Hash
{
}
