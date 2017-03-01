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
 * Gate stub.
 *
 * @method static \Illuminate\Auth\Access\Gate after(callable $callback) Register a callback to run after all Gate checks.
 * @see \Illuminate\Auth\Access\Gate::after
 *
 * @method static bool allows(string $ability, array|mixed $arguments = []) Determine if the given ability should be granted for the current user.
 * @see \Illuminate\Auth\Access\Gate::allows
 *
 * @method static \Illuminate\Auth\Access\Response authorize(string $ability, array|mixed $arguments = []) Determine if the given ability should be granted for the current user.
 * @see \Illuminate\Auth\Access\Gate::authorize
 *
 * @method static \Illuminate\Auth\Access\Gate before(callable $callback) Register a callback to run before all Gate checks.
 * @see \Illuminate\Auth\Access\Gate::before
 *
 * @method static bool check(string $ability, array|mixed $arguments = []) Determine if the given ability should be granted for the current user.
 * @see \Illuminate\Auth\Access\Gate::check
 *
 * @method static \Illuminate\Auth\Access\Gate define(string $ability, callable|string $callback) Define a new ability.
 * @see \Illuminate\Auth\Access\Gate::define
 *
 * @method static bool denies(string $ability, array|mixed $arguments = []) Determine if the given ability should be denied for the current user.
 * @see \Illuminate\Auth\Access\Gate::denies
 *
 * @method static static forUser(\Illuminate\Contracts\Auth\Authenticatable|mixed $user) Get a gate instance for the given user.
 * @see \Illuminate\Auth\Access\Gate::forUser
 *
 * @method static mixed getPolicyFor(object|string $class) Get a policy instance for a given class.
 * @see \Illuminate\Auth\Access\Gate::getPolicyFor
 *
 * @method static bool has(string $ability) Determine if a given ability has been defined.
 * @see \Illuminate\Auth\Access\Gate::has
 *
 * @method static \Illuminate\Auth\Access\Gate policy(string $class, string $policy) Define a policy class for a given class type.
 * @see \Illuminate\Auth\Access\Gate::policy
 *
 * @method static mixed resolvePolicy(object|string $class) Build a policy class instance of the given type.
 * @see \Illuminate\Auth\Access\Gate::resolvePolicy
 *
 */
class Gate extends \Illuminate\Support\Facades\Gate
{
}
