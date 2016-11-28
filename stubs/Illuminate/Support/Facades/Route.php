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
 * Illuminate\Support\Facades\Route stub.
 *
 * @method static \Illuminate\Routing\Route any(string $uri, \Closure|array|string|null $action = null) Register a new route responding to all verbs.
 * @see \Illuminate\Routing\Router::any
 *
 * @method static void auth() Register the typical authentication routes for an application.
 * @see \Illuminate\Routing\Router::auth
 *
 * @method static void bind(string $key, string|callable $binder) Add a new route parameter binder.
 * @see \Illuminate\Routing\Router::bind
 *
 * @method static \Closure createClassBinding(string $binding) Create a class based binding using the IoC container.
 * @see \Illuminate\Routing\Router::createClassBinding
 *
 * @method static \Illuminate\Routing\Route current() Get the currently dispatched route instance.
 * @see \Illuminate\Routing\Router::current
 *
 * @method static string|null currentRouteAction() Get the current route action.
 * @see \Illuminate\Routing\Router::currentRouteAction
 *
 * @method static string|null currentRouteName() Get the current route name.
 * @see \Illuminate\Routing\Router::currentRouteName
 *
 * @method static bool currentRouteNamed(string $name) Determine if the current route matches a given name.
 * @see \Illuminate\Routing\Router::currentRouteNamed
 *
 * @method static bool currentRouteUses(string $action) Determine if the current route action matches a given action.
 * @see \Illuminate\Routing\Router::currentRouteUses
 *
 * @method static \Illuminate\Routing\Route delete(string $uri, \Closure|array|string|null $action = null) Register a new DELETE route with the router.
 * @see \Illuminate\Routing\Router::delete
 *
 * @method static \Illuminate\Http\Response dispatch(\Illuminate\Http\Request $request) Dispatch the request to the application.
 * @see \Illuminate\Routing\Router::dispatch
 *
 * @method static mixed dispatchToRoute(\Illuminate\Http\Request $request) Dispatch the request to a route and return the response.
 * @see \Illuminate\Routing\Router::dispatchToRoute
 *
 * @method static array gatherRouteMiddleware(\Illuminate\Routing\Route $route) Gather the middleware for the given route.
 * @see \Illuminate\Routing\Router::gatherRouteMiddleware
 *
 * @method static \Illuminate\Routing\Route get(string $uri, \Closure|array|string|null $action = null) Register a new GET route with the router.
 * @see \Illuminate\Routing\Router::get
 *
 * @method static \Illuminate\Http\Request getCurrentRequest() Get the request currently being dispatched.
 * @see \Illuminate\Routing\Router::getCurrentRequest
 *
 * @method static \Illuminate\Routing\Route getCurrentRoute() Get the currently dispatched route instance.
 * @see \Illuminate\Routing\Router::getCurrentRoute
 *
 * @method static array getGroupStack() Get the current group stack for the router.
 * @see \Illuminate\Routing\Router::getGroupStack
 *
 * @method static string getLastGroupPrefix() Get the prefix from the last group on the stack.
 * @see \Illuminate\Routing\Router::getLastGroupPrefix
 *
 * @method static array getMiddleware() Get all of the defined middleware short-hand names.
 * @see \Illuminate\Routing\Router::getMiddleware
 *
 * @method static array getPatterns() Get the global "where" patterns.
 * @see \Illuminate\Routing\Router::getPatterns
 *
 * @method static \Illuminate\Routing\RouteCollection getRoutes() Get the underlying route collection.
 * @see \Illuminate\Routing\Router::getRoutes
 *
 * @method static void group(array $attributes, \Closure $callback) Create a route group with shared attributes.
 * @see \Illuminate\Routing\Router::group
 *
 * @method static bool has(string $name) Check if a route with the given name exists.
 * @see \Illuminate\Routing\Router::has
 *
 * @method static bool hasGroupStack() Determine if the router currently has a group stack.
 * @see \Illuminate\Routing\Router::hasGroupStack
 *
 * @method static mixed input(string $key, string $default = null) Get a route parameter for the current route.
 * @see \Illuminate\Routing\Router::input
 *
 * @method static bool is() Alias for the "currentRouteNamed" method.
 * @see \Illuminate\Routing\Router::is
 *
 * @method static \Illuminate\Routing\Route match(array|string $methods, string $uri, \Closure|array|string|null $action = null) Register a new route with the given verbs.
 * @see \Illuminate\Routing\Router::match
 *
 * @method static void matched(string|callable $callback) Register a route matched event listener.
 * @see \Illuminate\Routing\Router::matched
 *
 * @method static array mergeWithLastGroup(array $new) Merge the given array with the last group stack.
 * @see \Illuminate\Routing\Router::mergeWithLastGroup
 *
 * @method static \Illuminate\Routing\Router middleware(string $name, string $class) Register a short-hand name for a middleware.
 * @see \Illuminate\Routing\Router::middleware
 *
 * @method static \Illuminate\Routing\Router middlewareGroup(string $name, array $middleware) Register a group of middleware.
 * @see \Illuminate\Routing\Router::middlewareGroup
 *
 * @method static void model(string $key, string $class, \Closure|null $callback = null) Register a model binder for a wildcard.
 * @see \Illuminate\Routing\Router::model
 *
 * @method static \Illuminate\Routing\Route options(string $uri, \Closure|array|string|null $action = null) Register a new OPTIONS route with the router.
 * @see \Illuminate\Routing\Router::options
 *
 * @method static \Illuminate\Routing\Route patch(string $uri, \Closure|array|string|null $action = null) Register a new PATCH route with the router.
 * @see \Illuminate\Routing\Router::patch
 *
 * @method static void pattern(string $key, string $pattern) Set a global where pattern on all routes.
 * @see \Illuminate\Routing\Router::pattern
 *
 * @method static void patterns(array $patterns) Set a group of global where patterns on all routes.
 * @see \Illuminate\Routing\Router::patterns
 *
 * @method static \Illuminate\Routing\Route post(string $uri, \Closure|array|string|null $action = null) Register a new POST route with the router.
 * @see \Illuminate\Routing\Router::post
 *
 * @method static \Illuminate\Http\Response prepareResponse(\Symfony\Component\HttpFoundation\Request $request, mixed $response) Create a response instance from the given value.
 * @see \Illuminate\Routing\Router::prepareResponse
 *
 * @method static \Illuminate\Routing\Router prependMiddlewareToGroup(string $group, string $middleware) Add a middleware to the beginning of a middleware group.
 * @see \Illuminate\Routing\Router::prependMiddlewareToGroup
 *
 * @method static \Illuminate\Routing\Router pushMiddlewareToGroup(string $group, string $middleware) Add a middleware to the end of a middleware group.
 * @see \Illuminate\Routing\Router::pushMiddlewareToGroup
 *
 * @method static \Illuminate\Routing\Route put(string $uri, \Closure|array|string|null $action = null) Register a new PUT route with the router.
 * @see \Illuminate\Routing\Router::put
 *
 * @method static string|array resolveMiddlewareClassName(string $name) Resolve the middleware name to a class name(s) preserving passed parameters.
 * @see \Illuminate\Routing\Router::resolveMiddlewareClassName
 *
 * @method static void resource(string $name, string $controller, array $options = []) Route a resource to a controller.
 * @see \Illuminate\Routing\Router::resource
 *
 * @method static void resourceParameters(array $parameters = []) Set the global resource parameter mapping.
 * @see \Illuminate\Routing\Router::resourceParameters
 *
 * @method static void resources(array $resources) Register an array of resource controllers.
 * @see \Illuminate\Routing\Router::resources
 *
 * @method static void setRoutes(\Illuminate\Routing\RouteCollection $routes) Set the route collection instance.
 * @see \Illuminate\Routing\Router::setRoutes
 *
 * @method static void singularResourceParameters(bool $singular = true) Set the unmapped global resource parameters to singular.
 * @see \Illuminate\Routing\Router::singularResourceParameters
 *
 * @method static \Illuminate\Routing\Route substituteBindings(\Illuminate\Routing\Route $route) Substitute the route bindings onto the route.
 * @see \Illuminate\Routing\Router::substituteBindings
 *
 * @method static void substituteImplicitBindings(\Illuminate\Routing\Route $route) Substitute the implicit Eloquent model bindings for the route.
 * @see \Illuminate\Routing\Router::substituteImplicitBindings
 *
 * @method static bool uses() Alias for the "currentRouteUses" method.
 * @see \Illuminate\Routing\Router::uses
 *
 */
class Route
{
}
