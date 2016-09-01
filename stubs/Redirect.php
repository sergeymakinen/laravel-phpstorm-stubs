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
 * Redirect stub.
 *
 * @method static \Illuminate\Http\RedirectResponse action(string $action, array $parameters = [], int $status = 302, array $headers = []) Create a new redirect response to a controller action.
 * @see \Illuminate\Routing\Redirector::action
 *
 * @method static \Illuminate\Http\RedirectResponse away(string $path, int $status = 302, array $headers = []) Create a new redirect response to an external URL (no validation).
 * @see \Illuminate\Routing\Redirector::away
 *
 * @method static \Illuminate\Http\RedirectResponse back(int $status = 302, array $headers = []) Create a new redirect response to the previous location.
 * @see \Illuminate\Routing\Redirector::back
 *
 * @method static \Illuminate\Routing\UrlGenerator getUrlGenerator() Get the URL generator instance.
 * @see \Illuminate\Routing\Redirector::getUrlGenerator
 *
 * @method static \Illuminate\Http\RedirectResponse guest(string $path, int $status = 302, array $headers = [], bool $secure = null) Create a new redirect response, while putting the current URL in the session.
 * @see \Illuminate\Routing\Redirector::guest
 *
 * @method static \Illuminate\Http\RedirectResponse home(int $status = 302) Create a new redirect response to the "home" route.
 * @see \Illuminate\Routing\Redirector::home
 *
 * @method static \Illuminate\Http\RedirectResponse intended(string $default = '/', int $status = 302, array $headers = [], bool $secure = null) Create a new redirect response to the previously intended location.
 * @see \Illuminate\Routing\Redirector::intended
 *
 * @method static \Illuminate\Http\RedirectResponse refresh(int $status = 302, array $headers = []) Create a new redirect response to the current URI.
 * @see \Illuminate\Routing\Redirector::refresh
 *
 * @method static \Illuminate\Http\RedirectResponse route(string $route, array $parameters = [], int $status = 302, array $headers = []) Create a new redirect response to a named route.
 * @see \Illuminate\Routing\Redirector::route
 *
 * @method static \Illuminate\Http\RedirectResponse secure(string $path, int $status = 302, array $headers = []) Create a new redirect response to the given HTTPS path.
 * @see \Illuminate\Routing\Redirector::secure
 *
 * @method static void setSession(\Illuminate\Session\Store $session) Set the active session store.
 * @see \Illuminate\Routing\Redirector::setSession
 *
 * @method static \Illuminate\Http\RedirectResponse to(string $path, int $status = 302, array $headers = [], bool $secure = null) Create a new redirect response to the given path.
 * @see \Illuminate\Routing\Redirector::to
 *
 */
class Redirect extends \Illuminate\Support\Facades\Redirect
{
}
