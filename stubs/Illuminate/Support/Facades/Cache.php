<?php
/**
 * Laravel PhpStorm autocomplete stubs.
 *
 * Generated on Laravel 5.3.24.
 *
 * @see       https://github.com/sergeymakinen/laravel-phpstorm-stubs
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/laravel-phpstorm-stubs/blob/master/LICENSE The MIT License
 */

namespace Illuminate\Support\Facades;

/**
 * Illuminate\Support\Facades\Cache stub.
 *
 * @method static bool add(string $key, mixed $value, \DateTime|float|int $minutes) Store an item in the cache if the key does not exist.
 * @see \Illuminate\Cache\Repository::add
 *
 * @method static int|bool decrement(string $key, mixed $value = 1) Decrement the value of an item in the cache.
 * @see \Illuminate\Cache\Repository::decrement
 *
 * @method static mixed driver(string $driver = null) Get a cache driver instance.
 * @see \Illuminate\Cache\CacheManager::driver
 *
 * @method static \Illuminate\Cache\CacheManager extend(string $driver, \Closure $callback) Register a custom driver creator Closure.
 * @see \Illuminate\Cache\CacheManager::extend
 *
 * @method static void forever(string $key, mixed $value) Store an item in the cache indefinitely.
 * @see \Illuminate\Cache\Repository::forever
 *
 * @method static bool forget(string $key) Remove an item from the cache.
 * @see \Illuminate\Cache\Repository::forget
 *
 * @method static mixed get(string $key, mixed $default = null) Retrieve an item from the cache by key.
 * @see \Illuminate\Cache\Repository::get
 *
 * @method static float|int getDefaultCacheTime() Get the default cache time.
 * @see \Illuminate\Cache\Repository::getDefaultCacheTime
 *
 * @method static string getDefaultDriver() Get the default cache driver name.
 * @see \Illuminate\Cache\CacheManager::getDefaultDriver
 *
 * @method static \Illuminate\Contracts\Cache\Store getStore() Get the cache store implementation.
 * @see \Illuminate\Cache\Repository::getStore
 *
 * @method static bool has(string $key) Determine if an item exists in the cache.
 * @see \Illuminate\Cache\Repository::has
 *
 * @method static int|bool increment(string $key, mixed $value = 1) Increment the value of an item in the cache.
 * @see \Illuminate\Cache\Repository::increment
 *
 * @method static mixed macroCall(string $method, array $parameters) Dynamically handle calls to the class.
 * @see \Illuminate\Cache\Repository::macroCall
 *
 * @method static array many(array $keys) Retrieve multiple items from the cache by key.
 * @see \Illuminate\Cache\Repository::many
 *
 * @method static mixed pull(string $key, mixed $default = null) Retrieve an item from the cache and delete it.
 * @see \Illuminate\Cache\Repository::pull
 *
 * @method static void put(string $key, mixed $value, \DateTime|float|int $minutes = null) Store an item in the cache.
 * @see \Illuminate\Cache\Repository::put
 *
 * @method static void putMany(array $values, float|int $minutes) Store multiple items in the cache for a given number of minutes.
 * @see \Illuminate\Cache\Repository::putMany
 *
 * @method static mixed remember(string $key, \DateTime|float|int $minutes, \Closure $callback) Get an item from the cache, or store the default value.
 * @see \Illuminate\Cache\Repository::remember
 *
 * @method static mixed rememberForever(string $key, \Closure $callback) Get an item from the cache, or store the default value forever.
 * @see \Illuminate\Cache\Repository::rememberForever
 *
 * @method static \Illuminate\Cache\Repository repository(\Illuminate\Contracts\Cache\Store $store) Create a new cache repository with the given implementation.
 * @see \Illuminate\Cache\CacheManager::repository
 *
 * @method static mixed sear(string $key, \Closure $callback) Get an item from the cache, or store the default value forever.
 * @see \Illuminate\Cache\Repository::sear
 *
 * @method static void setDefaultCacheTime(float|int $minutes) Set the default cache time in minutes.
 * @see \Illuminate\Cache\Repository::setDefaultCacheTime
 *
 * @method static void setDefaultDriver(string $name) Set the default cache driver name.
 * @see \Illuminate\Cache\CacheManager::setDefaultDriver
 *
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events) Set the event dispatcher instance.
 * @see \Illuminate\Cache\Repository::setEventDispatcher
 *
 * @method static mixed store(string|null $name = null) Get a cache store instance by name.
 * @see \Illuminate\Cache\CacheManager::store
 *
 * @method static \Illuminate\Cache\TaggedCache tags(array|mixed $names) Begin executing a new tags operation if the store supports it.
 * @see \Illuminate\Cache\Repository::tags
 *
 */
class Cache
{
}
