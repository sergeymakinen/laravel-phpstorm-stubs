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
 * Illuminate\Support\Facades\DB stub.
 *
 * @method static int affectingStatement(string $query, array $bindings = []) Run an SQL statement and get the number of rows affected.
 * @see \Illuminate\Database\Connection::affectingStatement
 *
 * @method static array availableDrivers() Get all of the drivers that are actually available.
 * @see \Illuminate\Database\DatabaseManager::availableDrivers
 *
 * @method static void beginTransaction() Start a new database transaction.
 * @see \Illuminate\Database\Connection::beginTransaction
 *
 * @method static void bindValues(\PDOStatement $statement, array $bindings) Bind values to their parameters in the given statement.
 * @see \Illuminate\Database\Connection::bindValues
 *
 * @method static void commit() Commit the active database transaction.
 * @see \Illuminate\Database\Connection::commit
 *
 * @method static \Illuminate\Database\Connection connection(string $name = null) Get a database connection instance.
 * @see \Illuminate\Database\DatabaseManager::connection
 *
 * @method static \Generator cursor(string $query, array $bindings = [], bool $useReadPdo = true) Run a select statement against the database and returns a generator.
 * @see \Illuminate\Database\Connection::cursor
 *
 * @method static int delete(string $query, array $bindings = []) Run a delete statement against the database.
 * @see \Illuminate\Database\Connection::delete
 *
 * @method static void disableQueryLog() Disable the query log on the connection.
 * @see \Illuminate\Database\Connection::disableQueryLog
 *
 * @method static void disconnect() Disconnect from the underlying PDO connection.
 * @see \Illuminate\Database\Connection::disconnect
 *
 * @method static void enableQueryLog() Enable the query log on the connection.
 * @see \Illuminate\Database\Connection::enableQueryLog
 *
 * @method static void extend(string $name, callable $resolver) Register an extension connection resolver.
 * @see \Illuminate\Database\DatabaseManager::extend
 *
 * @method static void flushQueryLog() Clear the query log.
 * @see \Illuminate\Database\Connection::flushQueryLog
 *
 * @method static mixed getConfig(string $option) Get an option from the configuration options.
 * @see \Illuminate\Database\Connection::getConfig
 *
 * @method static array getConnections() Return all of the created connections.
 * @see \Illuminate\Database\DatabaseManager::getConnections
 *
 * @method static string getDatabaseName() Get the name of the connected database.
 * @see \Illuminate\Database\Connection::getDatabaseName
 *
 * @method static string getDefaultConnection() Get the default connection name.
 * @see \Illuminate\Database\DatabaseManager::getDefaultConnection
 *
 * @method static \Doctrine\DBAL\Schema\Column getDoctrineColumn(string $table, string $column) Get a Doctrine Schema Column instance.
 * @see \Illuminate\Database\Connection::getDoctrineColumn
 *
 * @method static \Doctrine\DBAL\Connection getDoctrineConnection() Get the Doctrine DBAL database connection instance.
 * @see \Illuminate\Database\Connection::getDoctrineConnection
 *
 * @method static \Doctrine\DBAL\Schema\AbstractSchemaManager getDoctrineSchemaManager() Get the Doctrine DBAL schema manager for the connection.
 * @see \Illuminate\Database\Connection::getDoctrineSchemaManager
 *
 * @method static string getDriverName() Get the PDO driver name.
 * @see \Illuminate\Database\Connection::getDriverName
 *
 * @method static \Illuminate\Contracts\Events\Dispatcher getEventDispatcher() Get the event dispatcher used by the connection.
 * @see \Illuminate\Database\Connection::getEventDispatcher
 *
 * @method static string|null getName() Get the database connection name.
 * @see \Illuminate\Database\Connection::getName
 *
 * @method static \PDO getPdo() Get the current PDO connection.
 * @see \Illuminate\Database\Connection::getPdo
 *
 * @method static \Illuminate\Database\Query\Processors\Processor getPostProcessor() Get the query post processor used by the connection.
 * @see \Illuminate\Database\Connection::getPostProcessor
 *
 * @method static \Illuminate\Database\Query\Grammars\Grammar getQueryGrammar() Get the query grammar used by the connection.
 * @see \Illuminate\Database\Connection::getQueryGrammar
 *
 * @method static array getQueryLog() Get the connection query log.
 * @see \Illuminate\Database\Connection::getQueryLog
 *
 * @method static \PDO getReadPdo() Get the current PDO connection used for reading.
 * @see \Illuminate\Database\Connection::getReadPdo
 *
 * @method static \Illuminate\Database\Schema\Builder getSchemaBuilder() Get a schema builder instance for the connection.
 * @see \Illuminate\Database\Connection::getSchemaBuilder
 *
 * @method static \Illuminate\Database\Schema\Grammars\Grammar getSchemaGrammar() Get the schema grammar used by the connection.
 * @see \Illuminate\Database\Connection::getSchemaGrammar
 *
 * @method static string getTablePrefix() Get the table prefix for the connection.
 * @see \Illuminate\Database\Connection::getTablePrefix
 *
 * @method static bool insert(string $query, array $bindings = []) Run an insert statement against the database.
 * @see \Illuminate\Database\Connection::insert
 *
 * @method static bool isDoctrineAvailable() Is Doctrine available?.
 * @see \Illuminate\Database\Connection::isDoctrineAvailable
 *
 * @method static void listen(\Closure $callback) Register a database query listener with the connection.
 * @see \Illuminate\Database\Connection::listen
 *
 * @method static void logQuery(string $query, array $bindings, float|null $time = null) Log a query in the connection's query log.
 * @see \Illuminate\Database\Connection::logQuery
 *
 * @method static bool logging() Determine whether we're logging queries.
 * @see \Illuminate\Database\Connection::logging
 *
 * @method static array prepareBindings(array $bindings) Prepare the query bindings for execution.
 * @see \Illuminate\Database\Connection::prepareBindings
 *
 * @method static array pretend(\Closure $callback) Execute the given callback in "dry run" mode.
 * @see \Illuminate\Database\Connection::pretend
 *
 * @method static bool pretending() Determine if the connection in a "dry run".
 * @see \Illuminate\Database\Connection::pretending
 *
 * @method static void purge(string $name = null) Disconnect from the given database and remove from local cache.
 * @see \Illuminate\Database\DatabaseManager::purge
 *
 * @method static \Illuminate\Database\Query\Builder query() Get a new query builder instance.
 * @see \Illuminate\Database\Connection::query
 *
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value) Get a new raw query expression.
 * @see \Illuminate\Database\Connection::raw
 *
 * @method static void reconnect() Reconnect to the database.
 * @see \Illuminate\Database\Connection::reconnect
 *
 * @method static void rollBack(int|null $toLevel = null) Rollback the active database transaction.
 * @see \Illuminate\Database\Connection::rollBack
 *
 * @method static array select(string $query, array $bindings = [], bool $useReadPdo = true) Run a select statement against the database.
 * @see \Illuminate\Database\Connection::select
 *
 * @method static array selectFromWriteConnection(string $query, array $bindings = []) Run a select statement against the database.
 * @see \Illuminate\Database\Connection::selectFromWriteConnection
 *
 * @method static mixed selectOne(string $query, array $bindings = [], bool $useReadPdo = true) Run a select statement and return a single result.
 * @see \Illuminate\Database\Connection::selectOne
 *
 * @method static string setDatabaseName(string $database) Set the name of the connected database.
 * @see \Illuminate\Database\Connection::setDatabaseName
 *
 * @method static void setDefaultConnection(string $name) Set the default connection name.
 * @see \Illuminate\Database\DatabaseManager::setDefaultConnection
 *
 * @method static void setEventDispatcher(\Illuminate\Contracts\Events\Dispatcher $events) Set the event dispatcher instance on the connection.
 * @see \Illuminate\Database\Connection::setEventDispatcher
 *
 * @method static \Illuminate\Database\Connection setPdo(\PDO|null $pdo) Set the PDO connection.
 * @see \Illuminate\Database\Connection::setPdo
 *
 * @method static void setPostProcessor(\Illuminate\Database\Query\Processors\Processor $processor) Set the query post processor used by the connection.
 * @see \Illuminate\Database\Connection::setPostProcessor
 *
 * @method static void setQueryGrammar(\Illuminate\Database\Query\Grammars\Grammar $grammar) Set the query grammar used by the connection.
 * @see \Illuminate\Database\Connection::setQueryGrammar
 *
 * @method static \Illuminate\Database\Connection setReadPdo(\PDO|null $pdo) Set the PDO connection used for reading.
 * @see \Illuminate\Database\Connection::setReadPdo
 *
 * @method static \Illuminate\Database\Connection setReconnector(callable $reconnector) Set the reconnect instance on the connection.
 * @see \Illuminate\Database\Connection::setReconnector
 *
 * @method static void setSchemaGrammar(\Illuminate\Database\Schema\Grammars\Grammar $grammar) Set the schema grammar used by the connection.
 * @see \Illuminate\Database\Connection::setSchemaGrammar
 *
 * @method static void setTablePrefix(string $prefix) Set the table prefix in use by the connection.
 * @see \Illuminate\Database\Connection::setTablePrefix
 *
 * @method static bool statement(string $query, array $bindings = []) Execute an SQL statement and return the boolean result.
 * @see \Illuminate\Database\Connection::statement
 *
 * @method static array supportedDrivers() Get all of the support drivers.
 * @see \Illuminate\Database\DatabaseManager::supportedDrivers
 *
 * @method static \Illuminate\Database\Query\Builder table(string $table) Begin a fluent query against a database table.
 * @see \Illuminate\Database\Connection::table
 *
 * @method static mixed transaction(\Closure $callback, int $attempts = 1) Execute a Closure within a transaction.
 * @see \Illuminate\Database\Connection::transaction
 *
 * @method static int transactionLevel() Get the number of active transactions.
 * @see \Illuminate\Database\Connection::transactionLevel
 *
 * @method static bool unprepared(string $query) Run a raw, unprepared query against the PDO connection.
 * @see \Illuminate\Database\Connection::unprepared
 *
 * @method static int update(string $query, array $bindings = []) Run an update statement against the database.
 * @see \Illuminate\Database\Connection::update
 *
 * @method static void useDefaultPostProcessor() Set the query post processor to the default implementation.
 * @see \Illuminate\Database\Connection::useDefaultPostProcessor
 *
 * @method static void useDefaultQueryGrammar() Set the query grammar to the default implementation.
 * @see \Illuminate\Database\Connection::useDefaultQueryGrammar
 *
 * @method static void useDefaultSchemaGrammar() Set the schema grammar to the default implementation.
 * @see \Illuminate\Database\Connection::useDefaultSchemaGrammar
 *
 * @method static \Illuminate\Database\Grammar withTablePrefix(\Illuminate\Database\Grammar $grammar) Set the table prefix and return the grammar.
 * @see \Illuminate\Database\Connection::withTablePrefix
 *
 */
class DB
{
}
