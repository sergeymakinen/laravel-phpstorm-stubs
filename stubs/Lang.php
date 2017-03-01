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
 * Lang stub.
 *
 * @method static void addLines(array $lines, string $locale, string $namespace = '*') Add translation lines to the given locale.
 * @see \Illuminate\Translation\Translator::addLines
 *
 * @method static void addNamespace(string $namespace, string $hint) Add a new namespace to the loader.
 * @see \Illuminate\Translation\Translator::addNamespace
 *
 * @method static string choice(string $key, int|array|\Countable $number, array $replace = [], string $locale = null) Get a translation according to an integer value.
 * @see \Illuminate\Translation\Translator::choice
 *
 * @method static string|array|null get(string $key, array $replace = [], string|null $locale = null, bool $fallback = true) Get the translation for the given key.
 * @see \Illuminate\Translation\Translator::get
 *
 * @method static string getFallback() Get the fallback locale being used.
 * @see \Illuminate\Translation\Translator::getFallback
 *
 * @method static string getFromJson(string $key, array $replace = [], string $locale = null) Get the translation for a given key from the JSON translation files.
 * @see \Illuminate\Translation\Translator::getFromJson
 *
 * @method static \Illuminate\Translation\LoaderInterface getLoader() Get the language line loader implementation.
 * @see \Illuminate\Translation\Translator::getLoader
 *
 * @method static string getLocale() Get the default locale being used.
 * @see \Illuminate\Translation\Translator::getLocale
 *
 * @method static \Illuminate\Translation\MessageSelector getSelector() Get the message selector instance.
 * @see \Illuminate\Translation\Translator::getSelector
 *
 * @method static bool has(string $key, string|null $locale = null, bool $fallback = true) Determine if a translation exists.
 * @see \Illuminate\Translation\Translator::has
 *
 * @method static bool hasForLocale(string $key, string|null $locale = null) Determine if a translation exists for a given locale.
 * @see \Illuminate\Translation\Translator::hasForLocale
 *
 * @method static void load(string $namespace, string $group, string $locale) Load the specified language group.
 * @see \Illuminate\Translation\Translator::load
 *
 * @method static string locale() Get the default locale being used.
 * @see \Illuminate\Translation\Translator::locale
 *
 * @method static array parseKey(string $key) Parse a key into namespace, group, and item.
 * @see \Illuminate\Translation\Translator::parseKey
 *
 * @method static void setFallback(string $fallback) Set the fallback locale being used.
 * @see \Illuminate\Translation\Translator::setFallback
 *
 * @method static void setLocale(string $locale) Set the default locale.
 * @see \Illuminate\Translation\Translator::setLocale
 *
 * @method static void setParsedKey(string $key, array $parsed) Set the parsed value of a key.
 * @see \Illuminate\Support\NamespacedItemResolver::setParsedKey
 *
 * @method static void setSelector(\Illuminate\Translation\MessageSelector $selector) Set the message selector instance.
 * @see \Illuminate\Translation\Translator::setSelector
 *
 * @method static string|array|null trans(string $key, array $replace = [], string $locale = null) Get the translation for a given key.
 * @see \Illuminate\Translation\Translator::trans
 *
 * @method static string transChoice(string $key, int|array|\Countable $number, array $replace = [], string $locale = null) Get a translation according to an integer value.
 * @see \Illuminate\Translation\Translator::transChoice
 *
 */
class Lang extends \Illuminate\Support\Facades\Lang
{
}
