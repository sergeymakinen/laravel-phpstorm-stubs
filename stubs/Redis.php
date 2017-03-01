<?php
/**
 * Laravel PhpStorm autocomplete stubs
 *
 * Generated on Laravel 5.4.13
 *
 * @see       https://github.com/sergeymakinen/laravel-phpstorm-stubs
 * @copyright Copyright (c) 2016-2017 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/laravel-phpstorm-stubs/blob/master/LICENSE The MIT License
 */

/**
 * Redis stub.
 *
 * @method static mixed client() Get the underlying Redis client.
 * @see \Illuminate\Redis\Connections\Connection::client
 *
 * @method static mixed command(string $method, array $parameters = []) Run a command against the Redis database.
 * @see \Illuminate\Redis\Connections\Connection::command
 *
 * @method static \Illuminate\Redis\Connections\Connection connection(string $name = null) Get a Redis connection by name.
 * @see \Illuminate\Contracts\Redis\Factory::connection
 *
 * @method static void psubscribe(array|string $channels, \Closure $callback) Subscribe to a set of given channels with wildcards.
 * @see \Illuminate\Redis\Connections\Connection::psubscribe
 *
 * @method static void subscribe(array|string $channels, \Closure $callback) Subscribe to a set of given channels for messages.
 * @see \Illuminate\Redis\Connections\Connection::subscribe
 *
 */
class Redis extends \Illuminate\Support\Facades\Redis
{
}
