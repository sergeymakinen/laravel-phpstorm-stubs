<?php
/**
 * Laravel PhpStorm autocomplete stubs
 *
 * Generated on Laravel 5.3.9
 *
 * @see       https://github.com/sergeymakinen/laravel-phpstorm-stubs
 * @copyright Copyright (c) 2016 Sergey Makinen (https://makinen.ru)
 * @license   https://github.com/sergeymakinen/laravel-phpstorm-stubs/blob/master/LICENSE The MIT License
 */

/**
 * Queue stub.
 *
 * @method static void addConnector(string $driver, \Closure $resolver) Add a queue connection resolver.
 * @see \Illuminate\Queue\QueueManager::addConnector
 *
 * @method static void after(mixed $callback) Register an event listener for the after job event.
 * @see \Illuminate\Queue\QueueManager::after
 *
 * @method static void before(mixed $callback) Register an event listener for the before job event.
 * @see \Illuminate\Queue\QueueManager::before
 *
 * @method static mixed bulk(array $jobs, mixed $data = '', string $queue = null) Push an array of jobs onto the queue.
 * @see \Illuminate\Queue\Queue::bulk
 *
 * @method static bool connected(string $name = null) Determine if the driver is connected.
 * @see \Illuminate\Queue\QueueManager::connected
 *
 * @method static \Illuminate\Contracts\Queue\Queue connection(string $name = null) Resolve a queue connection instance.
 * @see \Illuminate\Queue\QueueManager::connection
 *
 * @method static void exceptionOccurred(mixed $callback) Register an event listener for the exception occurred job event.
 * @see \Illuminate\Queue\QueueManager::exceptionOccurred
 *
 * @method static void extend(string $driver, \Closure $resolver) Add a queue connection resolver.
 * @see \Illuminate\Queue\QueueManager::extend
 *
 * @method static void failing(mixed $callback) Register an event listener for the failed job event.
 * @see \Illuminate\Queue\QueueManager::failing
 *
 * @method static string getDefaultDriver() Get the name of the default queue connection.
 * @see \Illuminate\Queue\QueueManager::getDefaultDriver
 *
 * @method static string getName(string $connection = null) Get the full name for the given connection.
 * @see \Illuminate\Queue\QueueManager::getName
 *
 * @method static bool isDownForMaintenance() Determine if the application is in maintenance mode.
 * @see \Illuminate\Queue\QueueManager::isDownForMaintenance
 *
 * @method static mixed laterOn(string $queue, \DateTime|int $delay, string $job, mixed $data = '') Push a new job onto the queue after a delay.
 * @see \Illuminate\Queue\Queue::laterOn
 *
 * @method static void looping(mixed $callback) Register an event listener for the daemon queue loop.
 * @see \Illuminate\Queue\QueueManager::looping
 *
 * @method static mixed pushOn(string $queue, string $job, mixed $data = '') Push a new job onto the queue.
 * @see \Illuminate\Queue\Queue::pushOn
 *
 * @method static void setContainer(\Illuminate\Container\Container $container) Set the IoC container instance.
 * @see \Illuminate\Queue\Queue::setContainer
 *
 * @method static void setDefaultDriver(string $name) Set the name of the default queue connection.
 * @see \Illuminate\Queue\QueueManager::setDefaultDriver
 *
 * @method static void stopping(mixed $callback) Register an event listener for the daemon queue stopping.
 * @see \Illuminate\Queue\QueueManager::stopping
 *
 */
class Queue extends \Illuminate\Support\Facades\Queue
{
}
