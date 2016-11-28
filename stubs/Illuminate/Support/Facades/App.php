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
 * Illuminate\Support\Facades\App stub.
 *
 * @method static void abort(int $code, string $message = '', array $headers = []) Throw an HttpException with the given data.
 * @see \Illuminate\Foundation\Application::abort
 *
 * @method static void addContextualBinding(string $concrete, string $abstract, \Closure|string $implementation) Add a contextual binding to the container.
 * @see \Illuminate\Container\Container::addContextualBinding
 *
 * @method static void addDeferredServices(array $services) Add an array of services to the application's deferred services.
 * @see \Illuminate\Foundation\Application::addDeferredServices
 *
 * @method static void afterBootstrapping(string $bootstrapper, \Closure $callback) Register a callback to run after a bootstrapper.
 * @see \Illuminate\Foundation\Application::afterBootstrapping
 *
 * @method static void afterLoadingEnvironment(\Closure $callback) Register a callback to run after loading the environment.
 * @see \Illuminate\Foundation\Application::afterLoadingEnvironment
 *
 * @method static void afterResolving(string $abstract, \Closure|null $callback = null) Register a new after resolving callback for all types.
 * @see \Illuminate\Container\Container::afterResolving
 *
 * @method static void alias(string $abstract, string $alias) Alias a type to a different name.
 * @see \Illuminate\Container\Container::alias
 *
 * @method static string basePath() Get the base path of the Laravel installation.
 * @see \Illuminate\Foundation\Application::basePath
 *
 * @method static void beforeBootstrapping(string $bootstrapper, \Closure $callback) Register a callback to run before a bootstrapper.
 * @see \Illuminate\Foundation\Application::beforeBootstrapping
 *
 * @method static void bind(string|array $abstract, \Closure|string|null $concrete = null, bool $shared = false) Register a binding with the container.
 * @see \Illuminate\Container\Container::bind
 *
 * @method static void bindIf(string $abstract, \Closure|string|null $concrete = null, bool $shared = false) Register a binding if it hasn't already been registered.
 * @see \Illuminate\Container\Container::bindIf
 *
 * @method static void boot() Boot the application's service providers.
 * @see \Illuminate\Foundation\Application::boot
 *
 * @method static void booted(mixed $callback) Register a new "booted" listener.
 * @see \Illuminate\Foundation\Application::booted
 *
 * @method static void booting(mixed $callback) Register a new boot listener.
 * @see \Illuminate\Foundation\Application::booting
 *
 * @method static string bootstrapPath() Get the path to the bootstrap directory.
 * @see \Illuminate\Foundation\Application::bootstrapPath
 *
 * @method static void bootstrapWith(array $bootstrappers) Run the given array of bootstrap classes.
 * @see \Illuminate\Foundation\Application::bootstrapWith
 *
 * @method static bool bound(string $abstract) Determine if the given abstract type has been bound.
 * @see \Illuminate\Foundation\Application::bound
 *
 * @method static mixed build(string $concrete, array $parameters = []) Instantiate a concrete instance of the given type.
 * @see \Illuminate\Container\Container::build
 *
 * @method static mixed call(callable|string $callback, array $parameters = [], string|null $defaultMethod = null) Call the given Closure / class@method and inject its dependencies.
 * @see \Illuminate\Container\Container::call
 *
 * @method static string configPath() Get the path to the application configuration files.
 * @see \Illuminate\Foundation\Application::configPath
 *
 * @method static bool configurationIsCached() Determine if the application configuration is cached.
 * @see \Illuminate\Foundation\Application::configurationIsCached
 *
 * @method static \Illuminate\Foundation\Application configureMonologUsing(callable $callback) Define a callback to be used to configure Monolog.
 * @see \Illuminate\Foundation\Application::configureMonologUsing
 *
 * @method static string databasePath() Get the path to the database directory.
 * @see \Illuminate\Foundation\Application::databasePath
 *
 * @method static string detectEnvironment(\Closure $callback) Detect the application's current environment.
 * @see \Illuminate\Foundation\Application::detectEnvironment
 *
 * @method static string|bool environment() Get or check the current application environment.
 * @see \Illuminate\Foundation\Application::environment
 *
 * @method static string environmentFile() Get the environment file the application is using.
 * @see \Illuminate\Foundation\Application::environmentFile
 *
 * @method static string environmentFilePath() Get the fully qualified path to the environment file.
 * @see \Illuminate\Foundation\Application::environmentFilePath
 *
 * @method static string environmentPath() Get the path to the environment file directory.
 * @see \Illuminate\Foundation\Application::environmentPath
 *
 * @method static void extend(string $abstract, \Closure $closure) "Extend" an abstract type in the container.
 * @see \Illuminate\Container\Container::extend
 *
 * @method static \Closure factory(string $abstract, array $defaults = []) Get a closure to resolve the given type from the container.
 * @see \Illuminate\Container\Container::factory
 *
 * @method static void flush() Flush the container of all bindings and resolved instances.
 * @see \Illuminate\Foundation\Application::flush
 *
 * @method static void forgetInstance(string $abstract) Remove a resolved instance from the instance cache.
 * @see \Illuminate\Container\Container::forgetInstance
 *
 * @method static void forgetInstances() Clear all of the instances from the container.
 * @see \Illuminate\Container\Container::forgetInstances
 *
 * @method static string getAlias(string $abstract) Get the alias for an abstract if available.
 * @see \Illuminate\Container\Container::getAlias
 *
 * @method static array getBindings() Get the container's bindings.
 * @see \Illuminate\Container\Container::getBindings
 *
 * @method static string getCachedCompilePath() Get the path to the cached "compiled.php" file.
 * @see \Illuminate\Foundation\Application::getCachedCompilePath
 *
 * @method static string getCachedConfigPath() Get the path to the configuration cache file.
 * @see \Illuminate\Foundation\Application::getCachedConfigPath
 *
 * @method static string getCachedRoutesPath() Get the path to the routes cache file.
 * @see \Illuminate\Foundation\Application::getCachedRoutesPath
 *
 * @method static string getCachedServicesPath() Get the path to the cached services.php file.
 * @see \Illuminate\Foundation\Application::getCachedServicesPath
 *
 * @method static array getDeferredServices() Get the application's deferred services.
 * @see \Illuminate\Foundation\Application::getDeferredServices
 *
 * @method static array getLoadedProviders() Get the service providers that have been loaded.
 * @see \Illuminate\Foundation\Application::getLoadedProviders
 *
 * @method static string getLocale() Get the current application locale.
 * @see \Illuminate\Foundation\Application::getLocale
 *
 * @method static callable getMonologConfigurator() Get the custom Monolog configurator for the application.
 * @see \Illuminate\Foundation\Application::getMonologConfigurator
 *
 * @method static string getNamespace() Get the application namespace.
 * @see \Illuminate\Foundation\Application::getNamespace
 *
 * @method static \Illuminate\Support\ServiceProvider|null getProvider(\Illuminate\Support\ServiceProvider|string $provider) Get the registered service provider instance if it exists.
 * @see \Illuminate\Foundation\Application::getProvider
 *
 * @method static \Symfony\Component\HttpFoundation\Response handle(\Symfony\Component\HttpFoundation\Request $request, int $type = \Illuminate\Foundation\Application::MASTER_REQUEST, bool $catch = true) Handles a Request to convert it to a Response.
 * @see \Illuminate\Foundation\Application::handle
 *
 * @method static bool hasBeenBootstrapped() Determine if the application has been bootstrapped before.
 * @see \Illuminate\Foundation\Application::hasBeenBootstrapped
 *
 * @method static bool hasMonologConfigurator() Determine if the application has a custom Monolog configurator.
 * @see \Illuminate\Foundation\Application::hasMonologConfigurator
 *
 * @method static void instance(string $abstract, mixed $instance) Register an existing instance as shared in the container.
 * @see \Illuminate\Container\Container::instance
 *
 * @method static bool isAlias(string $name) Determine if a given string is an alias.
 * @see \Illuminate\Container\Container::isAlias
 *
 * @method static bool isBooted() Determine if the application has booted.
 * @see \Illuminate\Foundation\Application::isBooted
 *
 * @method static bool isDeferredService(string $service) Determine if the given service is a deferred service.
 * @see \Illuminate\Foundation\Application::isDeferredService
 *
 * @method static bool isDownForMaintenance() Determine if the application is currently down for maintenance.
 * @see \Illuminate\Foundation\Application::isDownForMaintenance
 *
 * @method static bool isLocal() Determine if application is in local environment.
 * @see \Illuminate\Foundation\Application::isLocal
 *
 * @method static bool isLocale(string $locale) Determine if application locale is the given locale.
 * @see \Illuminate\Foundation\Application::isLocale
 *
 * @method static bool isShared(string $abstract) Determine if a given type is shared.
 * @see \Illuminate\Container\Container::isShared
 *
 * @method static string langPath() Get the path to the language files.
 * @see \Illuminate\Foundation\Application::langPath
 *
 * @method static void loadDeferredProvider(string $service) Load the provider for a deferred service.
 * @see \Illuminate\Foundation\Application::loadDeferredProvider
 *
 * @method static void loadDeferredProviders() Load and boot all of the remaining deferred providers.
 * @see \Illuminate\Foundation\Application::loadDeferredProviders
 *
 * @method static \Illuminate\Foundation\Application loadEnvironmentFrom(string $file) Set the environment file to be loaded during bootstrapping.
 * @see \Illuminate\Foundation\Application::loadEnvironmentFrom
 *
 * @method static mixed make(string $abstract, array $parameters = []) Resolve the given type from the container.
 * @see \Illuminate\Foundation\Application::make
 *
 * @method static string path() Get the path to the application "app" directory.
 * @see \Illuminate\Foundation\Application::path
 *
 * @method static string publicPath() Get the path to the public / web directory.
 * @see \Illuminate\Foundation\Application::publicPath
 *
 * @method static mixed rebinding(string $abstract, \Closure $callback) Bind a new callback to an abstract's rebind event.
 * @see \Illuminate\Container\Container::rebinding
 *
 * @method static mixed refresh(string $abstract, mixed $target, string $method) Refresh an instance on the given target and method.
 * @see \Illuminate\Container\Container::refresh
 *
 * @method static \Illuminate\Support\ServiceProvider register(\Illuminate\Support\ServiceProvider|string $provider, array $options = [], bool $force = false) Register a service provider with the application.
 * @see \Illuminate\Foundation\Application::register
 *
 * @method static void registerConfiguredProviders() Register all of the configured providers.
 * @see \Illuminate\Foundation\Application::registerConfiguredProviders
 *
 * @method static void registerCoreContainerAliases() Register the core class aliases in the container.
 * @see \Illuminate\Foundation\Application::registerCoreContainerAliases
 *
 * @method static void registerDeferredProvider(string $provider, string $service = null) Register a deferred provider and service.
 * @see \Illuminate\Foundation\Application::registerDeferredProvider
 *
 * @method static \Illuminate\Support\ServiceProvider resolveProviderClass(string $provider) Resolve a service provider instance from the class name.
 * @see \Illuminate\Foundation\Application::resolveProviderClass
 *
 * @method static bool resolved(string $abstract) Determine if the given abstract type has been resolved.
 * @see \Illuminate\Container\Container::resolved
 *
 * @method static void resolving(string $abstract, \Closure|null $callback = null) Register a new resolving callback.
 * @see \Illuminate\Container\Container::resolving
 *
 * @method static string resourcePath() Get the path to the resources directory.
 * @see \Illuminate\Foundation\Application::resourcePath
 *
 * @method static bool routesAreCached() Determine if the application routes are cached.
 * @see \Illuminate\Foundation\Application::routesAreCached
 *
 * @method static bool runningInConsole() Determine if we are running in the console.
 * @see \Illuminate\Foundation\Application::runningInConsole
 *
 * @method static bool runningUnitTests() Determine if we are running unit tests.
 * @see \Illuminate\Foundation\Application::runningUnitTests
 *
 * @method static \Illuminate\Foundation\Application setBasePath(string $basePath) Set the base path for the application.
 * @see \Illuminate\Foundation\Application::setBasePath
 *
 * @method static void setDeferredServices(array $services) Set the application's deferred services.
 * @see \Illuminate\Foundation\Application::setDeferredServices
 *
 * @method static void setLocale(string $locale) Set the current application locale.
 * @see \Illuminate\Foundation\Application::setLocale
 *
 * @method static \Closure share(\Closure $closure) Wrap a Closure such that it is shared.
 * @see \Illuminate\Container\Container::share
 *
 * @method static bool shouldSkipMiddleware() Determine if middleware has been disabled for the application.
 * @see \Illuminate\Foundation\Application::shouldSkipMiddleware
 *
 * @method static void singleton(string|array $abstract, \Closure|string|null $concrete = null) Register a shared binding in the container.
 * @see \Illuminate\Container\Container::singleton
 *
 * @method static string storagePath() Get the path to the storage directory.
 * @see \Illuminate\Foundation\Application::storagePath
 *
 * @method static void tag(array|string $abstracts, array|mixed $tags) Assign a set of tags to a given binding.
 * @see \Illuminate\Container\Container::tag
 *
 * @method static array tagged(string $tag) Resolve all of the bindings for a given tag.
 * @see \Illuminate\Container\Container::tagged
 *
 * @method static void terminate() Terminate the application.
 * @see \Illuminate\Foundation\Application::terminate
 *
 * @method static \Illuminate\Foundation\Application terminating(\Closure $callback) Register a terminating callback with the application.
 * @see \Illuminate\Foundation\Application::terminating
 *
 * @method static \Illuminate\Foundation\Application useDatabasePath(string $path) Set the database directory.
 * @see \Illuminate\Foundation\Application::useDatabasePath
 *
 * @method static \Illuminate\Foundation\Application useEnvironmentPath(string $path) Set the directory for the environment file.
 * @see \Illuminate\Foundation\Application::useEnvironmentPath
 *
 * @method static \Illuminate\Foundation\Application useStoragePath(string $path) Set the storage directory.
 * @see \Illuminate\Foundation\Application::useStoragePath
 *
 * @method static string version() Get the version number of the application.
 * @see \Illuminate\Foundation\Application::version
 *
 * @method static \Illuminate\Contracts\Container\ContextualBindingBuilder when(string $concrete) Define a contextual binding.
 * @see \Illuminate\Container\Container::when
 *
 * @method static \Closure wrap(\Closure $callback, array $parameters = []) Wrap the given closure such that its dependencies will be injected when executed.
 * @see \Illuminate\Container\Container::wrap
 *
 */
class App
{
}
