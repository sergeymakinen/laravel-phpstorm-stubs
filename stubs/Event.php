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
 * Event stub.
 *
 * @method static \Closure createClassListener(string $listener, bool $wildcard = false) Create a class based listener using the IoC container.
 * @see \Illuminate\Events\Dispatcher::createClassListener
 *
 * @method static array|null dispatch(string|object $event, mixed $payload = [], bool $halt = false) Fire an event and call the listeners.
 * @see \Illuminate\Events\Dispatcher::dispatch
 *
 * @method static array|null fire(string|object $event, mixed $payload = [], bool $halt = false) Fire an event and call the listeners.
 * @see \Illuminate\Events\Dispatcher::fire
 *
 * @method static void flush(string $event) Flush a set of pushed events.
 * @see \Illuminate\Events\Dispatcher::flush
 *
 * @method static void forget(string $event) Remove a set of listeners from the dispatcher.
 * @see \Illuminate\Events\Dispatcher::forget
 *
 * @method static void forgetPushed() Forget all of the pushed listeners.
 * @see \Illuminate\Events\Dispatcher::forgetPushed
 *
 * @method static array getListeners(string $eventName) Get all of the listeners for a given event name.
 * @see \Illuminate\Events\Dispatcher::getListeners
 *
 * @method static bool hasListeners(string $eventName) Determine if a given event has listeners.
 * @see \Illuminate\Events\Dispatcher::hasListeners
 *
 * @method static void listen(string|array $events, mixed $listener) Register an event listener with the dispatcher.
 * @see \Illuminate\Events\Dispatcher::listen
 *
 * @method static mixed makeListener(string|\Closure $listener, bool $wildcard = false) Register an event listener with the dispatcher.
 * @see \Illuminate\Events\Dispatcher::makeListener
 *
 * @method static void push(string $event, array $payload = []) Register an event and payload to be fired later.
 * @see \Illuminate\Events\Dispatcher::push
 *
 * @method static \Illuminate\Events\Dispatcher setQueueResolver(callable $resolver) Set the queue resolver implementation.
 * @see \Illuminate\Events\Dispatcher::setQueueResolver
 *
 * @method static void subscribe(object|string $subscriber) Register an event subscriber with the dispatcher.
 * @see \Illuminate\Events\Dispatcher::subscribe
 *
 * @method static array|null until(string|object $event, mixed $payload = []) Fire an event until the first non-null response is returned.
 * @see \Illuminate\Events\Dispatcher::until
 *
 */
class Event extends \Illuminate\Support\Facades\Event
{
}
