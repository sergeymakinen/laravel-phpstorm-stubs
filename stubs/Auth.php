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
 * Auth stub.
 *
 * @method static bool attempt(array $credentials = [], bool $remember = false) Attempt to authenticate a user using the given credentials.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::attempt
 *
 * @method static bool check() Determine if the current user is authenticated.
 * @see \Illuminate\Contracts\Auth\Guard::check
 *
 * @method static \Illuminate\Auth\SessionGuard createSessionDriver(string $name, array $config) Create a session based authentication guard.
 * @see \Illuminate\Auth\AuthManager::createSessionDriver
 *
 * @method static \Illuminate\Auth\TokenGuard createTokenDriver(string $name, array $config) Create a token based authentication guard.
 * @see \Illuminate\Auth\AuthManager::createTokenDriver
 *
 * @method static \Illuminate\Contracts\Auth\UserProvider createUserProvider(string $provider) Create the user provider implementation for the driver.
 * @see \Illuminate\Auth\AuthManager::createUserProvider
 *
 * @method static \Illuminate\Auth\AuthManager extend(string $driver, \Closure $callback) Register a custom driver creator Closure.
 * @see \Illuminate\Auth\AuthManager::extend
 *
 * @method static string getDefaultDriver() Get the default authentication driver name.
 * @see \Illuminate\Auth\AuthManager::getDefaultDriver
 *
 * @method static \Illuminate\Contracts\Auth\Guard|\Illuminate\Contracts\Auth\StatefulGuard guard(string $name = null) Attempt to get the guard from the local cache.
 * @see \Illuminate\Auth\AuthManager::guard
 *
 * @method static bool guest() Determine if the current user is a guest.
 * @see \Illuminate\Contracts\Auth\Guard::guest
 *
 * @method static int|null id() Get the ID for the currently authenticated user.
 * @see \Illuminate\Contracts\Auth\Guard::id
 *
 * @method static void login(\Illuminate\Contracts\Auth\Authenticatable $user, bool $remember = false) Log a user into the application.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::login
 *
 * @method static \Illuminate\Contracts\Auth\Authenticatable loginUsingId(mixed $id, bool $remember = false) Log the given user ID into the application.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::loginUsingId
 *
 * @method static void logout() Log the user out of the application.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::logout
 *
 * @method static bool once(array $credentials = []) Log a user into the application without sessions or cookies.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::once
 *
 * @method static bool onceUsingId(mixed $id) Log the given user ID into the application without sessions or cookies.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::onceUsingId
 *
 * @method static \Illuminate\Auth\AuthManager provider(string $name, \Closure $callback) Register a custom provider creator Closure.
 * @see \Illuminate\Auth\AuthManager::provider
 *
 * @method static \Illuminate\Auth\AuthManager resolveUsersUsing(\Closure $userResolver) Set the callback to be used to resolve users.
 * @see \Illuminate\Auth\AuthManager::resolveUsersUsing
 *
 * @method static void setDefaultDriver(string $name) Set the default authentication driver name.
 * @see \Illuminate\Auth\AuthManager::setDefaultDriver
 *
 * @method static void setUser(\Illuminate\Contracts\Auth\Authenticatable $user) Set the current user.
 * @see \Illuminate\Contracts\Auth\Guard::setUser
 *
 * @method static void shouldUse(string $name) Set the default guard driver the factory should serve.
 * @see \Illuminate\Auth\AuthManager::shouldUse
 *
 * @method static \Illuminate\Contracts\Auth\Authenticatable|null user() Get the currently authenticated user.
 * @see \Illuminate\Contracts\Auth\Guard::user
 *
 * @method static \Closure userResolver() Get the user resolver callback.
 * @see \Illuminate\Auth\AuthManager::userResolver
 *
 * @method static bool validate(array $credentials = []) Validate a user's credentials.
 * @see \Illuminate\Contracts\Auth\Guard::validate
 *
 * @method static bool viaRemember() Determine if the user was authenticated via "remember me" cookie.
 * @see \Illuminate\Contracts\Auth\StatefulGuard::viaRemember
 *
 * @method static \Illuminate\Auth\AuthManager viaRequest(string $driver, callable $callback) Register a new callback based request guard.
 * @see \Illuminate\Auth\AuthManager::viaRequest
 *
 */
class Auth extends \Illuminate\Support\Facades\Auth
{
}
