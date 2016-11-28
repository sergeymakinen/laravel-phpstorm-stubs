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

namespace Illuminate\Support\Facades;

/**
 * Illuminate\Support\Facades\Request stub.
 *
 * @method static bool accepts(string|array $contentTypes) Determines whether the current requests accepts a given content type.
 * @see \Illuminate\Http\Request::accepts
 *
 * @method static bool acceptsHtml() Determines whether a request accepts HTML.
 * @see \Illuminate\Http\Request::acceptsHtml
 *
 * @method static bool acceptsJson() Determines whether a request accepts JSON.
 * @see \Illuminate\Http\Request::acceptsJson
 *
 * @method static bool ajax() Determine if the request is the result of an AJAX call.
 * @see \Illuminate\Http\Request::ajax
 *
 * @method static array all() Get all of the input and files for the request.
 * @see \Illuminate\Http\Request::all
 *
 * @method static array allFiles() Get an array of all of the files on the request.
 * @see \Illuminate\Http\Request::allFiles
 *
 * @method static string|null bearerToken() Get the bearer token from the request headers.
 * @see \Illuminate\Http\Request::bearerToken
 *
 * @method static string|array cookie(string $key = null, string|array|null $default = null) Retrieve a cookie from the request.
 * @see \Illuminate\Http\Request::cookie
 *
 * @method static string decodedPath() Get the current encoded path info for the request.
 * @see \Illuminate\Http\Request::decodedPath
 *
 * @method static \Symfony\Component\HttpFoundation\Request duplicate(array $query = null, array $request = null, array $attributes = null, array $cookies = null, array $files = null, array $server = null) Clones a request and overrides some of its parameters.
 * @see \Illuminate\Http\Request::duplicate
 *
 * @method static array except(array|mixed $keys) Get all of the input except for a specified array of items.
 * @see \Illuminate\Http\Request::except
 *
 * @method static bool exists(string|array $key) Determine if the request contains a given input item key.
 * @see \Illuminate\Http\Request::exists
 *
 * @method static bool expectsJson() Determine if the current request probably expects a JSON response.
 * @see \Illuminate\Http\Request::expectsJson
 *
 * @method static \Illuminate\Http\UploadedFile|array|null file(string $key = null, mixed $default = null) Retrieve a file from the request.
 * @see \Illuminate\Http\Request::file
 *
 * @method static string fingerprint() Get a unique fingerprint for the request / route / IP address.
 * @see \Illuminate\Http\Request::fingerprint
 *
 * @method static void flash(string $filter = null, array $keys = []) Flash the input for the current request to the session.
 * @see \Illuminate\Http\Request::flash
 *
 * @method static void flashExcept(array|mixed $keys) Flash only some of the input to the session.
 * @see \Illuminate\Http\Request::flashExcept
 *
 * @method static void flashOnly(array|mixed $keys) Flash only some of the input to the session.
 * @see \Illuminate\Http\Request::flashOnly
 *
 * @method static void flush() Flush all of the old input from the session.
 * @see \Illuminate\Http\Request::flush
 *
 * @method static string format(string $default = 'html') Get the data format expected in the response.
 * @see \Illuminate\Http\Request::format
 *
 * @method static string fullUrl() Get the full URL for the request.
 * @see \Illuminate\Http\Request::fullUrl
 *
 * @method static bool fullUrlIs() Determine if the current request URL and query string matches a pattern.
 * @see \Illuminate\Http\Request::fullUrlIs
 *
 * @method static string fullUrlWithQuery(array $query) Get the full URL for the request with the added query string parameters.
 * @see \Illuminate\Http\Request::fullUrlWithQuery
 *
 * @method static mixed get(string $key, mixed $default = null) Gets a "parameter" value from any bag.
 * @see \Symfony\Component\HttpFoundation\Request::get
 *
 * @method static array getAcceptableContentTypes() Gets a list of content types acceptable by the client browser.
 * @see \Symfony\Component\HttpFoundation\Request::getAcceptableContentTypes
 *
 * @method static string getBasePath() Returns the root path from which this request is executed.
 * @see \Symfony\Component\HttpFoundation\Request::getBasePath
 *
 * @method static string getBaseUrl() Returns the root URL from which this request is executed.
 * @see \Symfony\Component\HttpFoundation\Request::getBaseUrl
 *
 * @method static array getCharsets() Gets a list of charsets acceptable by the client browser.
 * @see \Symfony\Component\HttpFoundation\Request::getCharsets
 *
 * @method static string getClientIp() Returns the client IP address.
 * @see \Symfony\Component\HttpFoundation\Request::getClientIp
 *
 * @method static array getClientIps() Returns the client IP addresses.
 * @see \Symfony\Component\HttpFoundation\Request::getClientIps
 *
 * @method static string|resource getContent(bool $asResource = false) Returns the request body content.
 * @see \Symfony\Component\HttpFoundation\Request::getContent
 *
 * @method static string|null getContentType() Gets the format associated with the request.
 * @see \Symfony\Component\HttpFoundation\Request::getContentType
 *
 * @method static string getDefaultLocale() Get the default locale.
 * @see \Symfony\Component\HttpFoundation\Request::getDefaultLocale
 *
 * @method static array getETags() Gets the Etags.
 * @see \Symfony\Component\HttpFoundation\Request::getETags
 *
 * @method static array getEncodings() Gets a list of encodings acceptable by the client browser.
 * @see \Symfony\Component\HttpFoundation\Request::getEncodings
 *
 * @method static string|null getFormat(string $mimeType) Gets the format associated with the mime type.
 * @see \Symfony\Component\HttpFoundation\Request::getFormat
 *
 * @method static string getHost() Returns the host name.
 * @see \Symfony\Component\HttpFoundation\Request::getHost
 *
 * @method static string getHttpHost() Returns the HTTP host being requested.
 * @see \Symfony\Component\HttpFoundation\Request::getHttpHost
 *
 * @method static array getLanguages() Gets a list of languages acceptable by the client browser.
 * @see \Symfony\Component\HttpFoundation\Request::getLanguages
 *
 * @method static string getLocale() Get the locale.
 * @see \Symfony\Component\HttpFoundation\Request::getLocale
 *
 * @method static string getMethod() Gets the request "intended" method.
 * @see \Symfony\Component\HttpFoundation\Request::getMethod
 *
 * @method static string getMimeType(string $format) Gets the mime type associated with the format.
 * @see \Symfony\Component\HttpFoundation\Request::getMimeType
 *
 * @method static string|null getPassword() Returns the password.
 * @see \Symfony\Component\HttpFoundation\Request::getPassword
 *
 * @method static string getPathInfo() Returns the path being requested relative to the executed script.
 * @see \Symfony\Component\HttpFoundation\Request::getPathInfo
 *
 * @method static string getPort() Returns the port on which the request is made.
 * @see \Symfony\Component\HttpFoundation\Request::getPort
 *
 * @method static string|null getPreferredLanguage(array $locales = null) Returns the preferred language.
 * @see \Symfony\Component\HttpFoundation\Request::getPreferredLanguage
 *
 * @method static string|null getQueryString() Generates the normalized query string for the Request.
 * @see \Symfony\Component\HttpFoundation\Request::getQueryString
 *
 * @method static string getRealMethod() Gets the "real" request method.
 * @see \Symfony\Component\HttpFoundation\Request::getRealMethod
 *
 * @method static string getRelativeUriForPath(string $path) Returns the path as relative reference from the current Request path.
 * @see \Symfony\Component\HttpFoundation\Request::getRelativeUriForPath
 *
 * @method static string getRequestFormat(string $default = 'html') Gets the request format.
 * @see \Symfony\Component\HttpFoundation\Request::getRequestFormat
 *
 * @method static string getRequestUri() Returns the requested URI (path and query string).
 * @see \Symfony\Component\HttpFoundation\Request::getRequestUri
 *
 * @method static \Closure getRouteResolver() Get the route resolver callback.
 * @see \Illuminate\Http\Request::getRouteResolver
 *
 * @method static string getScheme() Gets the request's scheme.
 * @see \Symfony\Component\HttpFoundation\Request::getScheme
 *
 * @method static string getSchemeAndHttpHost() Gets the scheme and HTTP host.
 * @see \Symfony\Component\HttpFoundation\Request::getSchemeAndHttpHost
 *
 * @method static string getScriptName() Returns current script name.
 * @see \Symfony\Component\HttpFoundation\Request::getScriptName
 *
 * @method static \Symfony\Component\HttpFoundation\Session\SessionInterface|null getSession() Gets the Session.
 * @see \Symfony\Component\HttpFoundation\Request::getSession
 *
 * @method static string getUri() Generates a normalized URI (URL) for the Request.
 * @see \Symfony\Component\HttpFoundation\Request::getUri
 *
 * @method static string getUriForPath(string $path) Generates a normalized URI for the given path.
 * @see \Symfony\Component\HttpFoundation\Request::getUriForPath
 *
 * @method static string|null getUser() Returns the user.
 * @see \Symfony\Component\HttpFoundation\Request::getUser
 *
 * @method static string getUserInfo() Gets the user info.
 * @see \Symfony\Component\HttpFoundation\Request::getUserInfo
 *
 * @method static \Closure getUserResolver() Get the user resolver callback.
 * @see \Illuminate\Http\Request::getUserResolver
 *
 * @method static bool has(string|array $key) Determine if the request contains a non-empty value for an input item.
 * @see \Illuminate\Http\Request::has
 *
 * @method static bool hasCookie(string $key) Determine if a cookie is set on the request.
 * @see \Illuminate\Http\Request::hasCookie
 *
 * @method static bool hasFile(string $key) Determine if the uploaded data contains a file.
 * @see \Illuminate\Http\Request::hasFile
 *
 * @method static bool hasHeader(string $key) Determine if a header is set on the request.
 * @see \Illuminate\Http\Request::hasHeader
 *
 * @method static bool hasPreviousSession() Whether the request contains a Session which was started in one of the.
 * @see \Symfony\Component\HttpFoundation\Request::hasPreviousSession
 *
 * @method static bool hasSession() Whether the request contains a Session object.
 * @see \Symfony\Component\HttpFoundation\Request::hasSession
 *
 * @method static string|array header(string $key = null, string|array|null $default = null) Retrieve a header from the request.
 * @see \Illuminate\Http\Request::header
 *
 * @method static void initialize(array $query = [], array $request = [], array $attributes = [], array $cookies = [], array $files = [], array $server = [], string|resource $content = null) Sets the parameters for this request.
 * @see \Symfony\Component\HttpFoundation\Request::initialize
 *
 * @method static string|array input(string $key = null, string|array|null $default = null) Retrieve an input item from the request.
 * @see \Illuminate\Http\Request::input
 *
 * @method static \Illuminate\Http\Request instance() Return the Request instance.
 * @see \Illuminate\Http\Request::instance
 *
 * @method static array intersect(array|mixed $keys) Intersect an array of items with the input data.
 * @see \Illuminate\Http\Request::intersect
 *
 * @method static string ip() Returns the client IP address.
 * @see \Illuminate\Http\Request::ip
 *
 * @method static array ips() Returns the client IP addresses.
 * @see \Illuminate\Http\Request::ips
 *
 * @method static bool is() Determine if the current request URI matches a pattern.
 * @see \Illuminate\Http\Request::is
 *
 * @method static bool isFromTrustedProxy() Indicates whether this request originated from a trusted proxy.
 * @see \Symfony\Component\HttpFoundation\Request::isFromTrustedProxy
 *
 * @method static bool isJson() Determine if the request is sending JSON.
 * @see \Illuminate\Http\Request::isJson
 *
 * @method static bool isMethod(string $method) Checks if the request method is of specified type.
 * @see \Symfony\Component\HttpFoundation\Request::isMethod
 *
 * @method static bool isMethodCacheable() Checks whether the method is cacheable or not.
 * @see \Symfony\Component\HttpFoundation\Request::isMethodCacheable
 *
 * @method static bool isMethodSafe() Checks whether the method is safe or not.
 * @see \Symfony\Component\HttpFoundation\Request::isMethodSafe
 *
 * @method static bool isNoCache()
 * @see \Symfony\Component\HttpFoundation\Request::isNoCache
 *
 * @method static bool isSecure() Checks whether the request is secure or not.
 * @see \Symfony\Component\HttpFoundation\Request::isSecure
 *
 * @method static bool isXmlHttpRequest() Returns true if the request is a XMLHttpRequest.
 * @see \Symfony\Component\HttpFoundation\Request::isXmlHttpRequest
 *
 * @method static mixed json(string $key = null, mixed $default = null) Get the JSON payload for the request.
 * @see \Illuminate\Http\Request::json
 *
 * @method static void merge(array $input) Merge new input into the current request's input array.
 * @see \Illuminate\Http\Request::merge
 *
 * @method static string method() Get the request method.
 * @see \Illuminate\Http\Request::method
 *
 * @method static string|array old(string $key = null, string|array|null $default = null) Retrieve an old input item.
 * @see \Illuminate\Http\Request::old
 *
 * @method static array only(array|mixed $keys) Get a subset containing the provided keys with values from the input data.
 * @see \Illuminate\Http\Request::only
 *
 * @method static void overrideGlobals() Overrides the PHP global variables according to this request instance.
 * @see \Symfony\Component\HttpFoundation\Request::overrideGlobals
 *
 * @method static string path() Get the current path info for the request.
 * @see \Illuminate\Http\Request::path
 *
 * @method static bool pjax() Determine if the request is the result of an PJAX call.
 * @see \Illuminate\Http\Request::pjax
 *
 * @method static string|null prefers(string|array $contentTypes) Return the most suitable content type from the given array based on content negotiation.
 * @see \Illuminate\Http\Request::prefers
 *
 * @method static string|array query(string $key = null, string|array|null $default = null) Retrieve a query string item from the request.
 * @see \Illuminate\Http\Request::query
 *
 * @method static void replace(array $input) Replace the input for the current request.
 * @see \Illuminate\Http\Request::replace
 *
 * @method static string root() Get the root URL for the application.
 * @see \Illuminate\Http\Request::root
 *
 * @method static \Illuminate\Routing\Route|object|string route(string|null $param = null) Get the route handling the request.
 * @see \Illuminate\Http\Request::route
 *
 * @method static bool secure() Determine if the request is over HTTPS.
 * @see \Illuminate\Http\Request::secure
 *
 * @method static string|null segment(int $index, string|null $default = null) Get a segment from the URI (1 based index).
 * @see \Illuminate\Http\Request::segment
 *
 * @method static array segments() Get all of the segments for the request path.
 * @see \Illuminate\Http\Request::segments
 *
 * @method static string|array server(string $key = null, string|array|null $default = null) Retrieve a server variable from the request.
 * @see \Illuminate\Http\Request::server
 *
 * @method static \Illuminate\Session\Store session() Get the session associated with the request.
 * @see \Illuminate\Http\Request::session
 *
 * @method static void setDefaultLocale(string $locale) Sets the default locale.
 * @see \Symfony\Component\HttpFoundation\Request::setDefaultLocale
 *
 * @method static void setFormat(string $format, string|array $mimeTypes) Associates a format with mime types.
 * @see \Symfony\Component\HttpFoundation\Request::setFormat
 *
 * @method static void setLocale(string $locale) Sets the locale.
 * @see \Symfony\Component\HttpFoundation\Request::setLocale
 *
 * @method static void setMethod(string $method) Sets the request method.
 * @see \Symfony\Component\HttpFoundation\Request::setMethod
 *
 * @method static void setRequestFormat(string $format) Sets the request format.
 * @see \Symfony\Component\HttpFoundation\Request::setRequestFormat
 *
 * @method static \Illuminate\Http\Request setRouteResolver(\Closure $callback) Set the route resolver callback.
 * @see \Illuminate\Http\Request::setRouteResolver
 *
 * @method static void setSession(\Symfony\Component\HttpFoundation\Session\SessionInterface $session) Sets the Session.
 * @see \Symfony\Component\HttpFoundation\Request::setSession
 *
 * @method static \Illuminate\Http\Request setUserResolver(\Closure $callback) Set the user resolver callback.
 * @see \Illuminate\Http\Request::setUserResolver
 *
 * @method static array toArray() Get all of the input and files for the request.
 * @see \Illuminate\Http\Request::toArray
 *
 * @method static string url() Get the URL (no query string) for the request.
 * @see \Illuminate\Http\Request::url
 *
 * @method static mixed user(string|null $guard = null) Get the user making the request.
 * @see \Illuminate\Http\Request::user
 *
 * @method static bool wantsJson() Determine if the current request is asking for JSON in return.
 * @see \Illuminate\Http\Request::wantsJson
 *
 */
class Request
{
}
