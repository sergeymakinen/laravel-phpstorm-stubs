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
 * Illuminate\Support\Facades\View stub.
 *
 * @method static void addExtension(string $extension, string $engine, \Closure $resolver = null) Register a valid view extension and its engine.
 * @see \Illuminate\View\Factory::addExtension
 *
 * @method static void addLocation(string $location) Add a location to the array of view locations.
 * @see \Illuminate\View\Factory::addLocation
 *
 * @method static void addLoop(\Countable|array $data) Add new loop to the stack.
 * @see \Illuminate\View\Factory::addLoop
 *
 * @method static \Illuminate\View\Factory addNamespace(string $namespace, string|array $hints) Add a new namespace to the loader.
 * @see \Illuminate\View\Factory::addNamespace
 *
 * @method static string appendSection() Stop injecting content into a section and append it.
 * @see \Illuminate\View\Factory::appendSection
 *
 * @method static void callComposer(\Illuminate\Contracts\View\View $view) Call the composer for a given view.
 * @see \Illuminate\View\Factory::callComposer
 *
 * @method static void callCreator(\Illuminate\Contracts\View\View $view) Call the creator for a given view.
 * @see \Illuminate\View\Factory::callCreator
 *
 * @method static array composer(array|string $views, \Closure|string $callback) Register a view composer event.
 * @see \Illuminate\View\Factory::composer
 *
 * @method static array composers(array $composers) Register multiple view composers via an array.
 * @see \Illuminate\View\Factory::composers
 *
 * @method static array creator(array|string $views, \Closure|string $callback) Register a view creator event.
 * @see \Illuminate\View\Factory::creator
 *
 * @method static void decrementRender() Decrement the rendering counter.
 * @see \Illuminate\View\Factory::decrementRender
 *
 * @method static bool doneRendering() Check if there are no active render operations.
 * @see \Illuminate\View\Factory::doneRendering
 *
 * @method static void endSlot() Save the slot content for rendering.
 * @see \Illuminate\View\Factory::endSlot
 *
 * @method static bool exists(string $view) Determine if a given view exists.
 * @see \Illuminate\View\Factory::exists
 *
 * @method static \Illuminate\Contracts\View\View file(string $path, array $data = [], array $mergeData = []) Get the evaluated view contents for the given view.
 * @see \Illuminate\View\Factory::file
 *
 * @method static void flushFinderCache() Flush the cache of views located by the finder.
 * @see \Illuminate\View\Factory::flushFinderCache
 *
 * @method static void flushSections() Flush all of the sections.
 * @see \Illuminate\View\Factory::flushSections
 *
 * @method static void flushStacks() Flush all of the stacks.
 * @see \Illuminate\View\Factory::flushStacks
 *
 * @method static void flushState() Flush all of the factory state like sections and stacks.
 * @see \Illuminate\View\Factory::flushState
 *
 * @method static void flushStateIfDoneRendering() Flush all of the section contents if done rendering.
 * @see \Illuminate\View\Factory::flushStateIfDoneRendering
 *
 * @method static \Illuminate\Contracts\Container\Container getContainer() Get the IoC container instance.
 * @see \Illuminate\View\Factory::getContainer
 *
 * @method static \Illuminate\Contracts\Events\Dispatcher getDispatcher() Get the event dispatcher instance.
 * @see \Illuminate\View\Factory::getDispatcher
 *
 * @method static \Illuminate\View\Engines\EngineInterface getEngineFromPath(string $path) Get the appropriate view engine for the given path.
 * @see \Illuminate\View\Factory::getEngineFromPath
 *
 * @method static \Illuminate\View\Engines\EngineResolver getEngineResolver() Get the engine resolver instance.
 * @see \Illuminate\View\Factory::getEngineResolver
 *
 * @method static array getExtensions() Get the extension to engine bindings.
 * @see \Illuminate\View\Factory::getExtensions
 *
 * @method static \Illuminate\View\ViewFinderInterface getFinder() Get the view finder instance.
 * @see \Illuminate\View\Factory::getFinder
 *
 * @method static \StdClass|null getLastLoop() Get an instance of the last loop in the stack.
 * @see \Illuminate\View\Factory::getLastLoop
 *
 * @method static array getLoopStack() Get the entire loop stack.
 * @see \Illuminate\View\Factory::getLoopStack
 *
 * @method static array getSections() Get the entire array of sections.
 * @see \Illuminate\View\Factory::getSections
 *
 * @method static array getShared() Get all of the shared data for the environment.
 * @see \Illuminate\View\Factory::getShared
 *
 * @method static bool hasSection(string $name) Check if section exists.
 * @see \Illuminate\View\Factory::hasSection
 *
 * @method static void incrementLoopIndices() Increment the top loop's indices.
 * @see \Illuminate\View\Factory::incrementLoopIndices
 *
 * @method static void incrementRender() Increment the rendering counter.
 * @see \Illuminate\View\Factory::incrementRender
 *
 * @method static void inject(string $section, string $content) Inject inline content into a section.
 * @see \Illuminate\View\Factory::inject
 *
 * @method static \Illuminate\Contracts\View\View make(string $view, array $data = [], array $mergeData = []) Get the evaluated view contents for the given view.
 * @see \Illuminate\View\Factory::make
 *
 * @method static void popLoop() Pop a loop from the top of the loop stack.
 * @see \Illuminate\View\Factory::popLoop
 *
 * @method static \Illuminate\View\Factory prependNamespace(string $namespace, string|array $hints) Prepend a new namespace to the loader.
 * @see \Illuminate\View\Factory::prependNamespace
 *
 * @method static string renderComponent() Render the current component.
 * @see \Illuminate\View\Factory::renderComponent
 *
 * @method static string renderEach(string $view, array $data, string $iterator, string $empty = 'raw|') Get the rendered contents of a partial from a loop.
 * @see \Illuminate\View\Factory::renderEach
 *
 * @method static string renderTranslation() Render the current translation.
 * @see \Illuminate\View\Factory::renderTranslation
 *
 * @method static \Illuminate\View\Factory replaceNamespace(string $namespace, string|array $hints) Replace the namespace hints for the given namespace.
 * @see \Illuminate\View\Factory::replaceNamespace
 *
 * @method static void setContainer(\Illuminate\Contracts\Container\Container $container) Set the IoC container instance.
 * @see \Illuminate\View\Factory::setContainer
 *
 * @method static void setDispatcher(\Illuminate\Contracts\Events\Dispatcher $events) Set the event dispatcher instance.
 * @see \Illuminate\View\Factory::setDispatcher
 *
 * @method static void setFinder(\Illuminate\View\ViewFinderInterface $finder) Set the view finder instance.
 * @see \Illuminate\View\Factory::setFinder
 *
 * @method static mixed share(array|string $key, mixed $value = null) Add a piece of shared data to the environment.
 * @see \Illuminate\View\Factory::share
 *
 * @method static mixed shared(string $key, mixed $default = null) Get an item from the shared data.
 * @see \Illuminate\View\Factory::shared
 *
 * @method static void slot(string $name, string|null $content = null) Start the slot rendering process.
 * @see \Illuminate\View\Factory::slot
 *
 * @method static void startComponent(string $name, array $data = []) Start a component rendering process.
 * @see \Illuminate\View\Factory::startComponent
 *
 * @method static void startPrepend(string $section, string $content = '') Start prepending content into a push section.
 * @see \Illuminate\View\Factory::startPrepend
 *
 * @method static void startPush(string $section, string $content = '') Start injecting content into a push section.
 * @see \Illuminate\View\Factory::startPush
 *
 * @method static void startSection(string $section, string|null $content = null) Start injecting content into a section.
 * @see \Illuminate\View\Factory::startSection
 *
 * @method static void startTranslation(array $replacements = []) Start a translation block.
 * @see \Illuminate\View\Factory::startTranslation
 *
 * @method static string stopPrepend() Stop prepending content into a push section.
 * @see \Illuminate\View\Factory::stopPrepend
 *
 * @method static string stopPush() Stop injecting content into a push section.
 * @see \Illuminate\View\Factory::stopPush
 *
 * @method static string stopSection(bool $overwrite = false) Stop injecting content into a section.
 * @see \Illuminate\View\Factory::stopSection
 *
 * @method static string yieldContent(string $section, string $default = '') Get the string contents of a section.
 * @see \Illuminate\View\Factory::yieldContent
 *
 * @method static string yieldPushContent(string $section, string $default = '') Get the string contents of a push section.
 * @see \Illuminate\View\Factory::yieldPushContent
 *
 * @method static string yieldSection() Stop injecting content into a section and return its contents.
 * @see \Illuminate\View\Factory::yieldSection
 *
 */
class View
{
}
