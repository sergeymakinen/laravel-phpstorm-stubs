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
 * Illuminate\Support\Facades\URL stub.
 *
 * @method static string action(string $action, mixed $parameters = [], bool $absolute = true) Get the URL to a controller action.
 * @see \Illuminate\Routing\UrlGenerator::action
 *
 * @method static string asset(string $path, bool|null $secure = null) Generate the URL to an application asset.
 * @see \Illuminate\Routing\UrlGenerator::asset
 *
 * @method static string assetFrom(string $root, string $path, bool|null $secure = null) Generate the URL to an asset from a custom root domain such as CDN, etc.
 * @see \Illuminate\Routing\UrlGenerator::assetFrom
 *
 * @method static string current() Get the current URL for the request.
 * @see \Illuminate\Routing\UrlGenerator::current
 *
 * @method static void defaults(array $defaults) Set the default named parameters used by the URL generator.
 * @see \Illuminate\Routing\UrlGenerator::defaults
 *
 * @method static void forceRootUrl(string $root) Set the forced root URL.
 * @see \Illuminate\Routing\UrlGenerator::forceRootUrl
 *
 * @method static void forceScheme(string $schema) Force the scheme for URLs.
 * @see \Illuminate\Routing\UrlGenerator::forceScheme
 *
 * @method static string format(string $root, string $path) Format the given URL segments into a single URL.
 * @see \Illuminate\Routing\UrlGenerator::format
 *
 * @method static \Illuminate\Routing\UrlGenerator formatHostUsing(\Closure $callback) Set a callback to be used to format the host of generated URLs.
 * @see \Illuminate\Routing\UrlGenerator::formatHostUsing
 *
 * @method static array formatParameters(mixed|array $parameters) Format the array of URL parameters.
 * @see \Illuminate\Routing\UrlGenerator::formatParameters
 *
 * @method static \Illuminate\Routing\UrlGenerator formatPathUsing(\Closure $callback) Set a callback to be used to format the path of generated URLs.
 * @see \Illuminate\Routing\UrlGenerator::formatPathUsing
 *
 * @method static string formatRoot(string $scheme, string $root = null) Get the base URL for the request.
 * @see \Illuminate\Routing\UrlGenerator::formatRoot
 *
 * @method static string formatScheme(bool|null $secure) Get the default scheme for a raw URL.
 * @see \Illuminate\Routing\UrlGenerator::formatScheme
 *
 * @method static string full() Get the full URL for the current request.
 * @see \Illuminate\Routing\UrlGenerator::full
 *
 * @method static \Illuminate\Http\Request getRequest() Get the request instance.
 * @see \Illuminate\Routing\UrlGenerator::getRequest
 *
 * @method static bool isValidUrl(string $path) Determine if the given path is a valid URL.
 * @see \Illuminate\Routing\UrlGenerator::isValidUrl
 *
 * @method static \Closure pathFormatter() Get the path formatter being used by the URL generator.
 * @see \Illuminate\Routing\UrlGenerator::pathFormatter
 *
 * @method static string previous(mixed $fallback = false) Get the URL for the previous request.
 * @see \Illuminate\Routing\UrlGenerator::previous
 *
 * @method static string route(string $name, mixed $parameters = [], bool $absolute = true) Get the URL to a named route.
 * @see \Illuminate\Routing\UrlGenerator::route
 *
 * @method static string secure(string $path, array $parameters = []) Generate a secure, absolute URL to the given path.
 * @see \Illuminate\Routing\UrlGenerator::secure
 *
 * @method static string secureAsset(string $path) Generate the URL to a secure asset.
 * @see \Illuminate\Routing\UrlGenerator::secureAsset
 *
 * @method static void setRequest(\Illuminate\Http\Request $request) Set the current request instance.
 * @see \Illuminate\Routing\UrlGenerator::setRequest
 *
 * @method static \Illuminate\Routing\UrlGenerator setRootControllerNamespace(string $rootNamespace) Set the root controller namespace.
 * @see \Illuminate\Routing\UrlGenerator::setRootControllerNamespace
 *
 * @method static \Illuminate\Routing\UrlGenerator setRoutes(\Illuminate\Routing\RouteCollection $routes) Set the route collection.
 * @see \Illuminate\Routing\UrlGenerator::setRoutes
 *
 * @method static \Illuminate\Routing\UrlGenerator setSessionResolver(callable $sessionResolver) Set the session resolver for the generator.
 * @see \Illuminate\Routing\UrlGenerator::setSessionResolver
 *
 * @method static string to(string $path, mixed $extra = [], bool|null $secure = null) Generate an absolute URL to the given path.
 * @see \Illuminate\Routing\UrlGenerator::to
 *
 */
class URL
{
}
