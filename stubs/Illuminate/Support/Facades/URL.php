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

namespace Illuminate\Support\Facades;

/**
 * Illuminate\Support\Facades\URL stub.
 *
 * @method static string action(string $action, mixed $parameters = [], bool $absolute = true) Get the URL to a controller action.
 * @see \Illuminate\Routing\UrlGenerator::action
 *
 * @method static string asset(string $path, bool|null $secure = null) Generate a URL to an application asset.
 * @see \Illuminate\Routing\UrlGenerator::asset
 *
 * @method static string assetFrom(string $root, string $path, bool|null $secure = null) Generate a URL to an asset from a custom root domain such as CDN, etc.
 * @see \Illuminate\Routing\UrlGenerator::assetFrom
 *
 * @method static string current() Get the current URL for the request.
 * @see \Illuminate\Routing\UrlGenerator::current
 *
 * @method static void forceRootUrl(string $root) Set the forced root URL.
 * @see \Illuminate\Routing\UrlGenerator::forceRootUrl
 *
 * @method static void forceSchema(string $schema) Force the schema for URLs.
 * @see \Illuminate\Routing\UrlGenerator::forceSchema
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
 * @method static string previous(mixed $fallback = false) Get the URL for the previous request.
 * @see \Illuminate\Routing\UrlGenerator::previous
 *
 * @method static string route(string $name, mixed $parameters = [], bool $absolute = true) Get the URL to a named route.
 * @see \Illuminate\Routing\UrlGenerator::route
 *
 * @method static string secure(string $path, array $parameters = []) Generate a secure, absolute URL to the given path.
 * @see \Illuminate\Routing\UrlGenerator::secure
 *
 * @method static string secureAsset(string $path) Generate a URL to a secure asset.
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
