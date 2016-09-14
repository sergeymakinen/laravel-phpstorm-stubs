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
 * Cookie stub.
 *
 * @method static \Symfony\Component\HttpFoundation\Cookie forever(string $name, string $value, string $path = null, string $domain = null, bool $secure = false, bool $httpOnly = true) Create a cookie that lasts "forever" (five years).
 * @see \Illuminate\Cookie\CookieJar::forever
 *
 * @method static \Symfony\Component\HttpFoundation\Cookie forget(string $name, string $path = null, string $domain = null) Expire the given cookie.
 * @see \Illuminate\Cookie\CookieJar::forget
 *
 * @method static array getQueuedCookies() Get the cookies which have been queued for the next request.
 * @see \Illuminate\Cookie\CookieJar::getQueuedCookies
 *
 * @method static bool hasQueued(string $key) Determine if a cookie has been queued.
 * @see \Illuminate\Cookie\CookieJar::hasQueued
 *
 * @method static \Symfony\Component\HttpFoundation\Cookie make(string $name, string $value, int $minutes = 0, string $path = null, string $domain = null, bool $secure = false, bool $httpOnly = true) Create a new cookie instance.
 * @see \Illuminate\Cookie\CookieJar::make
 *
 * @method static void queue() Queue a cookie to send with the next response.
 * @see \Illuminate\Cookie\CookieJar::queue
 *
 * @method static \Symfony\Component\HttpFoundation\Cookie queued(string $key, mixed $default = null) Get a queued cookie instance.
 * @see \Illuminate\Cookie\CookieJar::queued
 *
 * @method static \Illuminate\Cookie\CookieJar setDefaultPathAndDomain(string $path, string $domain, bool $secure = false) Set the default path and domain for the jar.
 * @see \Illuminate\Cookie\CookieJar::setDefaultPathAndDomain
 *
 * @method static void unqueue(string $name) Remove a cookie from the queue.
 * @see \Illuminate\Cookie\CookieJar::unqueue
 *
 */
class Cookie extends \Illuminate\Support\Facades\Cookie
{
}
