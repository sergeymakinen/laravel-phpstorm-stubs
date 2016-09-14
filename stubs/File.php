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
 * File stub.
 *
 * @method static array allFiles(string $directory, bool $hidden = false) Get all of the files from the given directory (recursive).
 * @see \Illuminate\Filesystem\Filesystem::allFiles
 *
 * @method static int append(string $path, string $data) Append to a file.
 * @see \Illuminate\Filesystem\Filesystem::append
 *
 * @method static string basename(string $path) Extract the trailing name component from a file path.
 * @see \Illuminate\Filesystem\Filesystem::basename
 *
 * @method static bool cleanDirectory(string $directory) Empty the specified directory of all files and folders.
 * @see \Illuminate\Filesystem\Filesystem::cleanDirectory
 *
 * @method static bool copy(string $path, string $target) Copy a file to a new location.
 * @see \Illuminate\Filesystem\Filesystem::copy
 *
 * @method static bool copyDirectory(string $directory, string $destination, int $options = null) Copy a directory from one location to another.
 * @see \Illuminate\Filesystem\Filesystem::copyDirectory
 *
 * @method static bool delete(string|array $paths) Delete the file at a given path.
 * @see \Illuminate\Filesystem\Filesystem::delete
 *
 * @method static bool deleteDirectory(string $directory, bool $preserve = false) Recursively delete a directory.
 * @see \Illuminate\Filesystem\Filesystem::deleteDirectory
 *
 * @method static array directories(string $directory) Get all of the directories within a given directory.
 * @see \Illuminate\Filesystem\Filesystem::directories
 *
 * @method static string dirname(string $path) Extract the parent directory from a file path.
 * @see \Illuminate\Filesystem\Filesystem::dirname
 *
 * @method static bool exists(string $path) Determine if a file or directory exists.
 * @see \Illuminate\Filesystem\Filesystem::exists
 *
 * @method static string extension(string $path) Extract the file extension from a file path.
 * @see \Illuminate\Filesystem\Filesystem::extension
 *
 * @method static array files(string $directory) Get an array of all files in a directory.
 * @see \Illuminate\Filesystem\Filesystem::files
 *
 * @method static string get(string $path, bool $lock = false) Get the contents of a file.
 * @see \Illuminate\Filesystem\Filesystem::get
 *
 * @method static mixed getRequire(string $path) Get the returned value of a file.
 * @see \Illuminate\Filesystem\Filesystem::getRequire
 *
 * @method static array glob(string $pattern, int $flags = 0) Find path names matching a given pattern.
 * @see \Illuminate\Filesystem\Filesystem::glob
 *
 * @method static bool isDirectory(string $directory) Determine if the given path is a directory.
 * @see \Illuminate\Filesystem\Filesystem::isDirectory
 *
 * @method static bool isFile(string $file) Determine if the given path is a file.
 * @see \Illuminate\Filesystem\Filesystem::isFile
 *
 * @method static bool isReadable(string $path) Determine if the given path is readable.
 * @see \Illuminate\Filesystem\Filesystem::isReadable
 *
 * @method static bool isWritable(string $path) Determine if the given path is writable.
 * @see \Illuminate\Filesystem\Filesystem::isWritable
 *
 * @method static int lastModified(string $path) Get the file's last modification time.
 * @see \Illuminate\Filesystem\Filesystem::lastModified
 *
 * @method static void link(string $target, string $link) Create a hard link to the target file or directory.
 * @see \Illuminate\Filesystem\Filesystem::link
 *
 * @method static bool makeDirectory(string $path, int $mode = 493, bool $recursive = false, bool $force = false) Create a directory.
 * @see \Illuminate\Filesystem\Filesystem::makeDirectory
 *
 * @method static string|bool mimeType(string $path) Get the mime-type of a given file.
 * @see \Illuminate\Filesystem\Filesystem::mimeType
 *
 * @method static bool move(string $path, string $target) Move a file to a new location.
 * @see \Illuminate\Filesystem\Filesystem::move
 *
 * @method static bool moveDirectory(string $from, string $to, bool $overwrite = false) Move a directory.
 * @see \Illuminate\Filesystem\Filesystem::moveDirectory
 *
 * @method static string name(string $path) Extract the file name from a file path.
 * @see \Illuminate\Filesystem\Filesystem::name
 *
 * @method static int prepend(string $path, string $data) Prepend to a file.
 * @see \Illuminate\Filesystem\Filesystem::prepend
 *
 * @method static int put(string $path, string $contents, bool $lock = false) Write the contents of a file.
 * @see \Illuminate\Filesystem\Filesystem::put
 *
 * @method static mixed requireOnce(string $file) Require the given file once.
 * @see \Illuminate\Filesystem\Filesystem::requireOnce
 *
 * @method static string sharedGet(string $path) Get contents of a file with shared access.
 * @see \Illuminate\Filesystem\Filesystem::sharedGet
 *
 * @method static int size(string $path) Get the file size of a given file.
 * @see \Illuminate\Filesystem\Filesystem::size
 *
 * @method static string type(string $path) Get the file type of a given file.
 * @see \Illuminate\Filesystem\Filesystem::type
 *
 */
class File extends \Illuminate\Support\Facades\File
{
}
