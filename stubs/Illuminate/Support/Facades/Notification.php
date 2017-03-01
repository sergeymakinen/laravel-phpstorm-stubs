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

namespace Illuminate\Support\Facades;

/**
 * Illuminate\Support\Facades\Notification stub.
 *
 * @method static mixed channel(string|null $name = null) Get a channel instance.
 * @see \Illuminate\Notifications\ChannelManager::channel
 *
 * @method static void deliverVia(string $channel) Set the default channel driver name.
 * @see \Illuminate\Notifications\ChannelManager::deliverVia
 *
 * @method static string deliversVia() Get the default channel driver name.
 * @see \Illuminate\Notifications\ChannelManager::deliversVia
 *
 * @method static mixed driver(string $driver = null) Get a driver instance.
 * @see \Illuminate\Support\Manager::driver
 *
 * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback) Register a custom driver creator Closure.
 * @see \Illuminate\Support\Manager::extend
 *
 * @method static string getDefaultDriver() Get the default channel driver name.
 * @see \Illuminate\Notifications\ChannelManager::getDefaultDriver
 *
 * @method static array getDrivers() Get all of the created "drivers".
 * @see \Illuminate\Support\Manager::getDrivers
 *
 * @method static void send(\Illuminate\Support\Collection|array|mixed $notifiables, mixed $notification) Send the given notification to the given notifiable entities.
 * @see \Illuminate\Notifications\ChannelManager::send
 *
 * @method static void sendNow(\Illuminate\Support\Collection|array|mixed $notifiables, mixed $notification, array|null $channels = null) Send the given notification immediately.
 * @see \Illuminate\Notifications\ChannelManager::sendNow
 *
 */
class Notification
{
}
