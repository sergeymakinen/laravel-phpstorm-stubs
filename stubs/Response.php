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
 * Response stub.
 *
 * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse download(\SplFileInfo|string $file, string $name = null, array $headers = [], string|null $disposition = 'attachment') Create a new file download response.
 * @see \Illuminate\Routing\ResponseFactory::download
 *
 * @method static \Symfony\Component\HttpFoundation\BinaryFileResponse file(\SplFileInfo|string $file, array $headers = []) Return the raw contents of a binary file.
 * @see \Illuminate\Routing\ResponseFactory::file
 *
 * @method static \Illuminate\Http\JsonResponse json(mixed $data = [], int $status = 200, array $headers = [], int $options = 0) Return a new JSON response from the application.
 * @see \Illuminate\Routing\ResponseFactory::json
 *
 * @method static \Illuminate\Http\JsonResponse jsonp(string $callback, mixed $data = [], int $status = 200, array $headers = [], int $options = 0) Return a new JSONP response from the application.
 * @see \Illuminate\Routing\ResponseFactory::jsonp
 *
 * @method static \Illuminate\Http\Response make(string $content = '', int $status = 200, array $headers = []) Return a new response from the application.
 * @see \Illuminate\Routing\ResponseFactory::make
 *
 * @method static \Illuminate\Http\RedirectResponse redirectGuest(string $path, int $status = 302, array $headers = [], bool|null $secure = null) Create a new redirect response, while putting the current URL in the session.
 * @see \Illuminate\Routing\ResponseFactory::redirectGuest
 *
 * @method static \Illuminate\Http\RedirectResponse redirectTo(string $path, int $status = 302, array $headers = [], bool|null $secure = null) Create a new redirect response to the given path.
 * @see \Illuminate\Routing\ResponseFactory::redirectTo
 *
 * @method static \Illuminate\Http\RedirectResponse redirectToAction(string $action, array $parameters = [], int $status = 302, array $headers = []) Create a new redirect response to a controller action.
 * @see \Illuminate\Routing\ResponseFactory::redirectToAction
 *
 * @method static \Illuminate\Http\RedirectResponse redirectToIntended(string $default = '/', int $status = 302, array $headers = [], bool|null $secure = null) Create a new redirect response to the previously intended location.
 * @see \Illuminate\Routing\ResponseFactory::redirectToIntended
 *
 * @method static \Illuminate\Http\RedirectResponse redirectToRoute(string $route, array $parameters = [], int $status = 302, array $headers = []) Create a new redirect response to a named route.
 * @see \Illuminate\Routing\ResponseFactory::redirectToRoute
 *
 * @method static \Symfony\Component\HttpFoundation\StreamedResponse stream(\Closure $callback, int $status = 200, array $headers = []) Return a new streamed response from the application.
 * @see \Illuminate\Routing\ResponseFactory::stream
 *
 * @method static \Illuminate\Http\Response view(string $view, array $data = [], int $status = 200, array $headers = []) Return a new view response from the application.
 * @see \Illuminate\Routing\ResponseFactory::view
 *
 */
class Response extends \Illuminate\Support\Facades\Response
{
}
