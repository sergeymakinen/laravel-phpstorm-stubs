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
 * Redis stub.
 *
 * @method static mixed command(string $method, array $parameters = []) Run a command against the Redis database.
 * @see \Illuminate\Redis\Database::command
 *
 * @method static \Predis\ClientInterface|null connection(string $name = 'default') Get a specific Redis connection instance.
 * @see \Illuminate\Redis\Database::connection
 *
 * @method static void psubscribe(array|string $channels, \Closure $callback, string $connection = null) Subscribe to a set of given channels with wildcards.
 * @see \Illuminate\Redis\Database::psubscribe
 *
 * @method static void subscribe(array|string $channels, \Closure $callback, string $connection = null, string $method = 'subscribe') Subscribe to a set of given channels for messages.
 * @see \Illuminate\Redis\Database::subscribe
 *
 */
class Redis extends \Illuminate\Support\Facades\Redis
{
}
