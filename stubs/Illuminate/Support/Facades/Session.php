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
 * Illuminate\Support\Facades\Session stub.
 *
 * @method static void ageFlashData() Age the flash data for the session.
 * @see \Illuminate\Session\Store::ageFlashData
 *
 * @method static array all() Get all of the session data.
 * @see \Illuminate\Session\Store::all
 *
 * @method static int decrement(string $key, int $amount = 1) Decrement the value of an item in the session.
 * @see \Illuminate\Session\Store::decrement
 *
 * @method static mixed driver(string $driver = null) Get a driver instance.
 * @see \Illuminate\Support\Manager::driver
 *
 * @method static bool exists(string|array $key) Checks if a key exists.
 * @see \Illuminate\Session\Store::exists
 *
 * @method static \Illuminate\Support\Manager extend(string $driver, \Closure $callback) Register a custom driver creator Closure.
 * @see \Illuminate\Support\Manager::extend
 *
 * @method static void flash(string $key, mixed $value) Flash a key / value pair to the session.
 * @see \Illuminate\Session\Store::flash
 *
 * @method static void flashInput(array $value) Flash an input array to the session.
 * @see \Illuminate\Session\Store::flashInput
 *
 * @method static void flush() Remove all of the items from the session.
 * @see \Illuminate\Session\Store::flush
 *
 * @method static void forget(string|array $keys) Remove one or many items from the session.
 * @see \Illuminate\Session\Store::forget
 *
 * @method static mixed get(string $key, mixed $default = null) Get an item from the session.
 * @see \Illuminate\Session\Store::get
 *
 * @method static string getDefaultDriver() Get the default session driver name.
 * @see \Illuminate\Session\SessionManager::getDefaultDriver
 *
 * @method static array getDrivers() Get all of the created "drivers".
 * @see \Illuminate\Support\Manager::getDrivers
 *
 * @method static \SessionHandlerInterface getHandler() Get the underlying session handler implementation.
 * @see \Illuminate\Session\Store::getHandler
 *
 * @method static string getId() Get the current session ID.
 * @see \Illuminate\Session\Store::getId
 *
 * @method static string getName() Get the name of the session.
 * @see \Illuminate\Session\Store::getName
 *
 * @method static mixed getOldInput(string $key = null, mixed $default = null) Get the requested item from the flashed input array.
 * @see \Illuminate\Session\Store::getOldInput
 *
 * @method static array getSessionConfig() Get the session configuration.
 * @see \Illuminate\Session\SessionManager::getSessionConfig
 *
 * @method static bool handlerNeedsRequest() Determine if the session handler needs a request.
 * @see \Illuminate\Session\Store::handlerNeedsRequest
 *
 * @method static bool has(string|array $key) Checks if an a key is present and not null.
 * @see \Illuminate\Session\Store::has
 *
 * @method static bool hasOldInput(string $key = null) Determine if the session contains old input.
 * @see \Illuminate\Session\Store::hasOldInput
 *
 * @method static mixed increment(string $key, int $amount = 1) Increment the value of an item in the session.
 * @see \Illuminate\Session\Store::increment
 *
 * @method static bool invalidate() Flush the session data and regenerate the ID.
 * @see \Illuminate\Session\Store::invalidate
 *
 * @method static bool isStarted() Determine if the session has been started.
 * @see \Illuminate\Session\Store::isStarted
 *
 * @method static bool isValidId(string $id) Determine if this is a valid session ID.
 * @see \Illuminate\Session\Store::isValidId
 *
 * @method static void keep(array|mixed $keys = null) Reflash a subset of the current flash data.
 * @see \Illuminate\Session\Store::keep
 *
 * @method static bool migrate(bool $destroy = false) Generate a new session ID for the session.
 * @see \Illuminate\Session\Store::migrate
 *
 * @method static void now(string $key, mixed $value) Flash a key / value pair to the session for immediate use.
 * @see \Illuminate\Session\Store::now
 *
 * @method static string|null previousUrl() Get the previous URL from the session.
 * @see \Illuminate\Session\Store::previousUrl
 *
 * @method static mixed pull(string $key, string $default = null) Get the value of a given key and then forget it.
 * @see \Illuminate\Session\Store::pull
 *
 * @method static void push(string $key, mixed $value) Push a value onto a session array.
 * @see \Illuminate\Session\Store::push
 *
 * @method static void put(string|array $key, mixed $value = null) Put a key / value pair or array of key / value pairs in the session.
 * @see \Illuminate\Session\Store::put
 *
 * @method static void reflash() Reflash all of the session flash data.
 * @see \Illuminate\Session\Store::reflash
 *
 * @method static bool regenerate(bool $destroy = false) Generate a new session identifier.
 * @see \Illuminate\Session\Store::regenerate
 *
 * @method static void regenerateToken() Regenerate the CSRF token value.
 * @see \Illuminate\Session\Store::regenerateToken
 *
 * @method static mixed remember(string $key, \Closure $callback) Get an item from the session, or store the default value.
 * @see \Illuminate\Session\Store::remember
 *
 * @method static mixed remove(string $key) Remove an item from the session, returning its value.
 * @see \Illuminate\Session\Store::remove
 *
 * @method static void replace(array $attributes) Replace the given session attributes entirely.
 * @see \Illuminate\Session\Store::replace
 *
 * @method static bool save() Save the session data to storage.
 * @see \Illuminate\Session\Store::save
 *
 * @method static void setDefaultDriver(string $name) Set the default session driver name.
 * @see \Illuminate\Session\SessionManager::setDefaultDriver
 *
 * @method static void setExists(bool $value) Set the existence of the session on the handler if applicable.
 * @see \Illuminate\Session\Store::setExists
 *
 * @method static void setId(string $id) Set the session ID.
 * @see \Illuminate\Session\Store::setId
 *
 * @method static void setName(string $name) Set the name of the session.
 * @see \Illuminate\Session\Store::setName
 *
 * @method static void setPreviousUrl(string $url) Set the "previous" URL in the session.
 * @see \Illuminate\Session\Store::setPreviousUrl
 *
 * @method static void setRequestOnHandler(\Illuminate\Http\Request $request) Set the request on the handler instance.
 * @see \Illuminate\Session\Store::setRequestOnHandler
 *
 * @method static bool start() Start the session, reading the data from a handler.
 * @see \Illuminate\Session\Store::start
 *
 * @method static string token() Get the CSRF token value.
 * @see \Illuminate\Session\Store::token
 *
 */
class Session
{
}
