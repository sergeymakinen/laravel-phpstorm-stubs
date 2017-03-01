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
 * Password stub.
 *
 * @method static string createToken(\Illuminate\Contracts\Auth\CanResetPassword $user) Create a new password reset token for the given user.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::createToken
 *
 * @method static void deleteToken(\Illuminate\Contracts\Auth\CanResetPassword $user) Delete password reset tokens of the given user.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::deleteToken
 *
 * @method static \Illuminate\Auth\Passwords\TokenRepositoryInterface getRepository() Get the password reset token repository implementation.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::getRepository
 *
 * @method static \Illuminate\Contracts\Auth\CanResetPassword getUser(array $credentials) Get the user for the given credentials.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::getUser
 *
 * @method static mixed reset(array $credentials, \Closure $callback) Reset the password for the given token.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::reset
 *
 * @method static string sendResetLink(array $credentials) Send a password reset link to a user.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::sendResetLink
 *
 * @method static bool tokenExists(\Illuminate\Contracts\Auth\CanResetPassword $user, string $token) Validate the given password reset token.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::tokenExists
 *
 * @method static bool validateNewPassword(array $credentials) Determine if the passwords match for the request.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::validateNewPassword
 *
 * @method static void validator(\Closure $callback) Set a custom password validator.
 * @see \Illuminate\Auth\Passwords\PasswordBroker::validator
 *
 */
class Password extends \Illuminate\Support\Facades\Password
{
}
