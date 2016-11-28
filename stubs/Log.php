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

/**
 * Log stub.
 *
 * @method static void alert(string $message, array $context = []) Log an alert message to the logs.
 * @see \Illuminate\Log\Writer::alert
 *
 * @method static void critical(string $message, array $context = []) Log a critical message to the logs.
 * @see \Illuminate\Log\Writer::critical
 *
 * @method static void debug(string $message, array $context = []) Log a debug message to the logs.
 * @see \Illuminate\Log\Writer::debug
 *
 * @method static void emergency(string $message, array $context = []) Log an emergency message to the logs.
 * @see \Illuminate\Log\Writer::emergency
 *
 * @method static void error(string $message, array $context = []) Log an error message to the logs.
 * @see \Illuminate\Log\Writer::error
 *
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher() Get the event dispatcher instance.
 * @see \Illuminate\Log\Writer::getEventDispatcher
 *
 * @method static \Monolog\Logger getMonolog() Get the underlying Monolog instance.
 * @see \Illuminate\Log\Writer::getMonolog
 *
 * @method static void info(string $message, array $context = []) Log an informational message to the logs.
 * @see \Illuminate\Log\Writer::info
 *
 * @method static void listen(\Closure $callback) Register a new callback handler for when a log event is triggered.
 * @see \Illuminate\Log\Writer::listen
 *
 * @method static void log(string $level, string $message, array $context = []) Log a message to the logs.
 * @see \Illuminate\Log\Writer::log
 *
 * @method static void notice(string $message, array $context = []) Log a notice to the logs.
 * @see \Illuminate\Log\Writer::notice
 *
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $dispatcher) Set the event dispatcher instance.
 * @see \Illuminate\Log\Writer::setEventDispatcher
 *
 * @method static void useDailyFiles(string $path, int $days = 0, string $level = 'debug') Register a daily file log handler.
 * @see \Illuminate\Log\Writer::useDailyFiles
 *
 * @method static void useErrorLog(string $level = 'debug', int $messageType = Monolog\Handler\ErrorLogHandler::OPERATING_SYSTEM) Register an error_log handler.
 * @see \Illuminate\Log\Writer::useErrorLog
 *
 * @method static void useFiles(string $path, string $level = 'debug') Register a file log handler.
 * @see \Illuminate\Log\Writer::useFiles
 *
 * @method static \Psr\Log\LoggerInterface useSyslog(string $name = 'laravel', string $level = 'debug') Register a Syslog handler.
 * @see \Illuminate\Log\Writer::useSyslog
 *
 * @method static void warning(string $message, array $context = []) Log a warning message to the logs.
 * @see \Illuminate\Log\Writer::warning
 *
 * @method static void write(string $level, string $message, array $context = []) Dynamically pass log calls into the writer.
 * @see \Illuminate\Log\Writer::write
 *
 */
class Log extends \Illuminate\Support\Facades\Log
{
}
