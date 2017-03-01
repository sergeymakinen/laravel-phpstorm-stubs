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
 * Illuminate\Support\Facades\Mail stub.
 *
 * @method static void alwaysFrom(string $address, string|null $name = null) Set the global from address and name.
 * @see \Illuminate\Mail\Mailer::alwaysFrom
 *
 * @method static void alwaysReplyTo(string $address, string|null $name = null) Set the global reply-to address and name.
 * @see \Illuminate\Mail\Mailer::alwaysReplyTo
 *
 * @method static void alwaysTo(string $address, string|null $name = null) Set the global to address and name.
 * @see \Illuminate\Mail\Mailer::alwaysTo
 *
 * @method static \Illuminate\Mail\PendingMail bcc(mixed $users) Begin the process of mailing a mailable class instance.
 * @see \Illuminate\Mail\Mailer::bcc
 *
 * @method static array failures() Get the array of failed recipients.
 * @see \Illuminate\Mail\Mailer::failures
 *
 * @method static \Swift_Mailer getSwiftMailer() Get the Swift Mailer instance.
 * @see \Illuminate\Mail\Mailer::getSwiftMailer
 *
 * @method static \Illuminate\Contracts\View\Factory getViewFactory() Get the view factory instance.
 * @see \Illuminate\Mail\Mailer::getViewFactory
 *
 * @method static mixed later(int $delay, string|array $view, array $data = [], \Closure|string $callback = null, string|null $queue = null) Queue a new e-mail message for sending after (n) seconds.
 * @see \Illuminate\Mail\Mailer::later
 *
 * @method static mixed laterOn(string $queue, int $delay, string|array $view, array $data, \Closure|string $callback) Queue a new e-mail message for sending after (n) seconds on the given queue.
 * @see \Illuminate\Mail\Mailer::laterOn
 *
 * @method static mixed onQueue(string $queue, string|array $view, array $data, \Closure|string $callback) Queue a new e-mail message for sending on the given queue.
 * @see \Illuminate\Mail\Mailer::onQueue
 *
 * @method static void plain(string $view, array $data, mixed $callback) Send a new message when only a plain part.
 * @see \Illuminate\Mail\Mailer::plain
 *
 * @method static mixed queue(string|array $view, array $data = [], \Closure|string $callback = null, string|null $queue = null) Queue a new e-mail message for sending.
 * @see \Illuminate\Mail\Mailer::queue
 *
 * @method static mixed queueOn(string $queue, string|array $view, array $data, \Closure|string $callback) Queue a new e-mail message for sending on the given queue.
 * @see \Illuminate\Mail\Mailer::queueOn
 *
 * @method static void raw(string $text, mixed $callback) Send a new message when only a raw text part.
 * @see \Illuminate\Mail\Mailer::raw
 *
 * @method static void send(string|array $view, array $data = [], \Closure|string $callback = null) Send a new message using a view.
 * @see \Illuminate\Mail\Mailer::send
 *
 * @method static \Illuminate\Mail\Mailer setQueue(\Illuminate\Contracts\Queue\Factory $queue) Set the queue manager instance.
 * @see \Illuminate\Mail\Mailer::setQueue
 *
 * @method static void setSwiftMailer(\Swift_Mailer $swift) Set the Swift Mailer instance.
 * @see \Illuminate\Mail\Mailer::setSwiftMailer
 *
 * @method static \Illuminate\Mail\PendingMail to(mixed $users) Begin the process of mailing a mailable class instance.
 * @see \Illuminate\Mail\Mailer::to
 *
 */
class Mail
{
}
