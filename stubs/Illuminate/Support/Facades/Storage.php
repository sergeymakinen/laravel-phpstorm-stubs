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
 * Illuminate\Support\Facades\Storage stub.
 *
 * @method static array allDirectories(string|null $directory = null) Get all (recursive) of the directories within a given directory.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::allDirectories
 *
 * @method static array allFiles(string|null $directory = null) Get all of the files from the given directory (recursive).
 * @see \Illuminate\Contracts\Filesystem\Filesystem::allFiles
 *
 * @method static int append(string $path, string $data) Append to a file.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::append
 *
 * @method static \Illuminate\Contracts\Filesystem\Filesystem cloud() Get a default cloud filesystem instance.
 * @see \Illuminate\Filesystem\FilesystemManager::cloud
 *
 * @method static bool copy(string $from, string $to) Copy a file to a new location.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::copy
 *
 * @method static \Illuminate\Contracts\Filesystem\Filesystem createFtpDriver(array $config) Create an instance of the ftp driver.
 * @see \Illuminate\Filesystem\FilesystemManager::createFtpDriver
 *
 * @method static \Illuminate\Contracts\Filesystem\Filesystem createLocalDriver(array $config) Create an instance of the local driver.
 * @see \Illuminate\Filesystem\FilesystemManager::createLocalDriver
 *
 * @method static \Illuminate\Contracts\Filesystem\Cloud createRackspaceDriver(array $config) Create an instance of the Rackspace driver.
 * @see \Illuminate\Filesystem\FilesystemManager::createRackspaceDriver
 *
 * @method static \Illuminate\Contracts\Filesystem\Cloud createS3Driver(array $config) Create an instance of the Amazon S3 driver.
 * @see \Illuminate\Filesystem\FilesystemManager::createS3Driver
 *
 * @method static bool delete(string|array $paths) Delete the file at a given path.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::delete
 *
 * @method static bool deleteDirectory(string $directory) Recursively delete a directory.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::deleteDirectory
 *
 * @method static array directories(string|null $directory = null, bool $recursive = false) Get all of the directories within a given directory.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::directories
 *
 * @method static \Illuminate\Contracts\Filesystem\Filesystem disk(string $name = null) Get a filesystem instance.
 * @see \Illuminate\Filesystem\FilesystemManager::disk
 *
 * @method static \Illuminate\Contracts\Filesystem\Filesystem drive(string $name = null) Get a filesystem instance.
 * @see \Illuminate\Filesystem\FilesystemManager::drive
 *
 * @method static bool exists(string $path) Determine if a file exists.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::exists
 *
 * @method static \Illuminate\Filesystem\FilesystemManager extend(string $driver, \Closure $callback) Register a custom driver creator Closure.
 * @see \Illuminate\Filesystem\FilesystemManager::extend
 *
 * @method static array files(string|null $directory = null, bool $recursive = false) Get an array of all files in a directory.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::files
 *
 * @method static string get(string $path) Get the contents of a file.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::get
 *
 * @method static string getDefaultCloudDriver() Get the default cloud driver name.
 * @see \Illuminate\Filesystem\FilesystemManager::getDefaultCloudDriver
 *
 * @method static string getDefaultDriver() Get the default driver name.
 * @see \Illuminate\Filesystem\FilesystemManager::getDefaultDriver
 *
 * @method static string getVisibility(string $path) Get the visibility for the given path.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::getVisibility
 *
 * @method static int lastModified(string $path) Get the file's last modification time.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::lastModified
 *
 * @method static bool makeDirectory(string $path) Create a directory.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::makeDirectory
 *
 * @method static bool move(string $from, string $to) Move a file to a new location.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::move
 *
 * @method static int prepend(string $path, string $data) Prepend to a file.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::prepend
 *
 * @method static bool put(string $path, string|resource $contents, string $visibility = null) Write the contents of a file.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::put
 *
 * @method static void setVisibility(string $path, string $visibility) Set the visibility for the given path.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::setVisibility
 *
 * @method static int size(string $path) Get the file size of a given file.
 * @see \Illuminate\Contracts\Filesystem\Filesystem::size
 *
 */
class Storage
{
}
