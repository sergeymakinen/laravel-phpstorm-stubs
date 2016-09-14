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

namespace Illuminate\Database\Eloquent;

/**
 * Illuminate\Database\Eloquent\Builder stub.
 *
 * @method \Illuminate\Database\Query\Builder addBinding(mixed $value, string $type = 'where') Add a binding to the query.
 * @see \Illuminate\Database\Query\Builder::addBinding
 *
 * @method \Illuminate\Database\Query\Builder addNestedWhereQuery(\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query, string $boolean = 'and') Add another query builder as a nested where to the query builder.
 * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
 *
 * @method \Illuminate\Database\Query\Builder addSelect(array|mixed $column) Add a new select column to the query.
 * @see \Illuminate\Database\Query\Builder::addSelect
 *
 * @method \Illuminate\Database\Query\Builder addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
 *
 * @method mixed aggregate(string $function, array $columns = ['*']) Execute an aggregate function on the database.
 * @see \Illuminate\Database\Query\Builder::aggregate
 *
 * @method mixed average(string $column) Alias for the "avg" method.
 * @see \Illuminate\Database\Query\Builder::average
 *
 * @method mixed avg(string $column) Retrieve the average of the values of a given column.
 * @see \Illuminate\Database\Query\Builder::avg
 *
 * @method bool chunk(int $count, callable $callback) Chunk the results of the query.
 * @see \Illuminate\Database\Query\Builder::chunk
 *
 * @method bool chunkById(int $count, callable $callback, string $column = 'id', string $alias = null) Chunk the results of a query by comparing numeric IDs.
 * @see \Illuminate\Database\Query\Builder::chunkById
 *
 * @method int count(string $columns = '*') Retrieve the "count" result of the query.
 * @see \Illuminate\Database\Query\Builder::count
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder crossJoin(string $table, string $first = null, string $operator = null, string $second = null) Add a "cross join" clause to the query.
 * @see \Illuminate\Database\Query\Builder::crossJoin
 *
 * @method \Generator cursor() Get a generator for the given query.
 * @see \Illuminate\Database\Query\Builder::cursor
 *
 * @method int decrement(string $column, int $amount = 1, array $extra = []) Decrement a column's value by a given amount.
 * @see \Illuminate\Database\Query\Builder::decrement
 *
 * @method int delete(mixed $id = null) Delete a record from the database.
 * @see \Illuminate\Database\Query\Builder::delete
 *
 * @method \Illuminate\Database\Query\Builder distinct() Force the query to only return distinct results.
 * @see \Illuminate\Database\Query\Builder::distinct
 *
 * @method \Illuminate\Database\Query\Builder dynamicWhere(string $method, string $parameters) Handles dynamic "where" clauses to the query.
 * @see \Illuminate\Database\Query\Builder::dynamicWhere
 *
 * @method bool each(callable $callback, int $count = 1000) Execute a callback over each item while chunking.
 * @see \Illuminate\Database\Query\Builder::each
 *
 * @method bool exists() Determine if any rows exist for the current query.
 * @see \Illuminate\Database\Query\Builder::exists
 *
 * @method mixed|\Illuminate\Database\Eloquent\Builder find(int $id, array $columns = ['*']) Execute a query for a single record by ID.
 * @see \Illuminate\Database\Query\Builder::find
 *
 * @method \stdClass|array|null first(array $columns = ['*']) Execute the query and get the first result.
 * @see \Illuminate\Database\Query\Builder::first
 *
 * @method \Illuminate\Database\Query\Builder forNestedWhere() Create a new query instance for nested where condition.
 * @see \Illuminate\Database\Query\Builder::forNestedWhere
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder forPage(int $page, int $perPage = 15) Set the limit and offset for a given page.
 * @see \Illuminate\Database\Query\Builder::forPage
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder forPageAfterId(int $perPage = 15, int $lastId = 0, string $column = 'id') Constrain the query to the next "page" of results after a given ID.
 * @see \Illuminate\Database\Query\Builder::forPageAfterId
 *
 * @method \Illuminate\Database\Query\Builder from(string $table) Set the table which the query is targeting.
 * @see \Illuminate\Database\Query\Builder::from
 *
 * @method \Illuminate\Support\Collection get(array $columns = ['*']) Execute the query as a "select" statement.
 * @see \Illuminate\Database\Query\Builder::get
 *
 * @method array getBindings() Get the current query value bindings in a flattened array.
 * @see \Illuminate\Database\Query\Builder::getBindings
 *
 * @method \Illuminate\Database\ConnectionInterface getConnection() Get the database connection instance.
 * @see \Illuminate\Database\Query\Builder::getConnection
 *
 * @method int getCountForPagination(array $columns = ['*']) Get the count of the total records for the paginator.
 * @see \Illuminate\Database\Query\Builder::getCountForPagination
 *
 * @method \Illuminate\Database\Query\Grammars\Grammar getGrammar() Get the query grammar instance.
 * @see \Illuminate\Database\Query\Builder::getGrammar
 *
 * @method \Illuminate\Database\Query\Processors\Processor getProcessor() Get the database query processor instance.
 * @see \Illuminate\Database\Query\Builder::getProcessor
 *
 * @method array getRawBindings() Get the raw array of bindings.
 * @see \Illuminate\Database\Query\Builder::getRawBindings
 *
 * @method \Illuminate\Database\Query\Builder groupBy(...$groups) Add a "group by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::groupBy
 *
 * @method \Illuminate\Database\Query\Builder having(string $column, string $operator = null, string $value = null, string $boolean = 'and') Add a "having" clause to the query.
 * @see \Illuminate\Database\Query\Builder::having
 *
 * @method \Illuminate\Database\Query\Builder havingRaw(string $sql, array $bindings = [], string $boolean = 'and') Add a raw having clause to the query.
 * @see \Illuminate\Database\Query\Builder::havingRaw
 *
 * @method string implode(string $column, string $glue = '') Concatenate values of a given column as a string.
 * @see \Illuminate\Database\Query\Builder::implode
 *
 * @method \Illuminate\Database\Query\Builder inRandomOrder(string $seed = '') Put the query's results in random order.
 * @see \Illuminate\Database\Query\Builder::inRandomOrder
 *
 * @method int increment(string $column, int $amount = 1, array $extra = []) Increment a column's value by a given amount.
 * @see \Illuminate\Database\Query\Builder::increment
 *
 * @method bool insert(array $values) Insert a new record into the database.
 * @see \Illuminate\Database\Query\Builder::insert
 *
 * @method int insertGetId(array $values, string $sequence = null) Insert a new record and get the value of the primary key.
 * @see \Illuminate\Database\Query\Builder::insertGetId
 *
 * @method \Illuminate\Database\Query\Builder join(string $table, string $one, string $operator = null, string $two = null, string $type = 'inner', bool $where = false) Add a join clause to the query.
 * @see \Illuminate\Database\Query\Builder::join
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder joinWhere(string $table, string $one, string $operator, string $two, string $type = 'inner') Add a "join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::joinWhere
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder latest(string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @see \Illuminate\Database\Query\Builder::latest
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder leftJoin(string $table, string $first, string $operator = null, string $second = null) Add a left join to the query.
 * @see \Illuminate\Database\Query\Builder::leftJoin
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder leftJoinWhere(string $table, string $one, string $operator, string $two) Add a "join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::leftJoinWhere
 *
 * @method \Illuminate\Database\Query\Builder limit(int $value) Set the "limit" value of the query.
 * @see \Illuminate\Database\Query\Builder::limit
 *
 * @method \Illuminate\Database\Query\Builder lock(bool $value = true) Lock the selected rows in the table.
 * @see \Illuminate\Database\Query\Builder::lock
 *
 * @method \Illuminate\Database\Query\Builder lockForUpdate() Lock the selected rows in the table for updating.
 * @see \Illuminate\Database\Query\Builder::lockForUpdate
 *
 * @method mixed macroCall(string $method, array $parameters) Dynamically handle calls to the class.
 * @see \Illuminate\Database\Query\Builder::macroCall
 *
 * @method mixed max(string $column) Retrieve the maximum value of a given column.
 * @see \Illuminate\Database\Query\Builder::max
 *
 * @method \Illuminate\Database\Query\Builder mergeBindings(\Illuminate\Database\Query\Builder $query) Merge an array of bindings into our bindings.
 * @see \Illuminate\Database\Query\Builder::mergeBindings
 *
 * @method void mergeWheres(array $wheres, array $bindings) Merge an array of where clauses and bindings.
 * @see \Illuminate\Database\Query\Builder::mergeWheres
 *
 * @method mixed min(string $column) Retrieve the minimum value of a given column.
 * @see \Illuminate\Database\Query\Builder::min
 *
 * @method \Illuminate\Database\Query\Builder newQuery() Get a new instance of the query builder.
 * @see \Illuminate\Database\Query\Builder::newQuery
 *
 * @method float|int numericAggregate(string $function, array $columns = ['*']) Execute a numeric aggregate function on the database.
 * @see \Illuminate\Database\Query\Builder::numericAggregate
 *
 * @method \Illuminate\Database\Query\Builder offset(int $value) Set the "offset" value of the query.
 * @see \Illuminate\Database\Query\Builder::offset
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder oldest(string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @see \Illuminate\Database\Query\Builder::oldest
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orHaving(string $column, string $operator = null, string $value = null) Add a "or having" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orHaving
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orHavingRaw(string $sql, array $bindings = []) Add a raw or having clause to the query.
 * @see \Illuminate\Database\Query\Builder::orHavingRaw
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhere(\Closure|string $column, string $operator = null, mixed $value = null) Add an "or where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhere
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereBetween(string $column, array $values) Add an or where between statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereBetween
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereColumn(string|array $first, string|null $operator = null, string|null $second = null) Add an "or where" clause comparing two columns to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereColumn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereDate(string $column, string $operator, string $value) Add an "or where date" statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereDate
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereExists(\Closure $callback, bool $not = false) Add an or exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereExists
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereIn(string $column, mixed $values) Add an "or where in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereIn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotBetween(string $column, array $values) Add an or where not between statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotExists(\Closure $callback) Add a where not exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotExists
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotIn(string $column, mixed $values) Add an "or where not in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotIn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotNull(string $column) Add an "or where not null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotNull
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNull(string $column) Add an "or where null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNull
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereRaw(string $sql, array $bindings = []) Add a raw or where clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereRaw
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereTime(string $column, string $operator, int $value) Add an "or where time" statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereTime
 *
 * @method \Illuminate\Database\Query\Builder orderBy(string $column, string $direction = 'asc') Add an "order by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orderBy
 *
 * @method \Illuminate\Database\Query\Builder orderByRaw(string $sql, array $bindings = []) Add a raw "order by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orderByRaw
 *
 * @method \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query into a simple paginator.
 * @see \Illuminate\Database\Query\Builder::paginate
 *
 * @method \Illuminate\Support\Collection pluck(string $column, string|null $key = null) Get an array with the values of a given column.
 * @see \Illuminate\Database\Query\Builder::pluck
 *
 * @method \Illuminate\Database\Query\Expression raw(mixed $value) Create a raw database expression.
 * @see \Illuminate\Database\Query\Builder::raw
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder rightJoin(string $table, string $first, string $operator = null, string $second = null) Add a right join to the query.
 * @see \Illuminate\Database\Query\Builder::rightJoin
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder rightJoinWhere(string $table, string $one, string $operator, string $two) Add a "right join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::rightJoinWhere
 *
 * @method \Illuminate\Database\Query\Builder select(array|mixed $columns = ['*']) Set the columns to be selected.
 * @see \Illuminate\Database\Query\Builder::select
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder selectRaw(string $expression, array $bindings = []) Add a new "raw" select expression to the query.
 * @see \Illuminate\Database\Query\Builder::selectRaw
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder selectSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as) Add a subselect expression to the query.
 * @see \Illuminate\Database\Query\Builder::selectSub
 *
 * @method \Illuminate\Database\Query\Builder setBindings(array $bindings, string $type = 'where') Set the bindings on the query builder.
 * @see \Illuminate\Database\Query\Builder::setBindings
 *
 * @method \Illuminate\Database\Query\Builder sharedLock() Share lock the selected rows in the table.
 * @see \Illuminate\Database\Query\Builder::sharedLock
 *
 * @method \Illuminate\Contracts\Pagination\Paginator simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Get a paginator only supporting simple next and previous links.
 * @see \Illuminate\Database\Query\Builder::simplePaginate
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder skip(int $value) Alias to set the "offset" value of the query.
 * @see \Illuminate\Database\Query\Builder::skip
 *
 * @method mixed sum(string $column) Retrieve the sum of the values of a given column.
 * @see \Illuminate\Database\Query\Builder::sum
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder take(int $value) Alias to set the "limit" value of the query.
 * @see \Illuminate\Database\Query\Builder::take
 *
 * @method string toSql() Get the SQL representation of the query.
 * @see \Illuminate\Database\Query\Builder::toSql
 *
 * @method void truncate() Run a truncate statement on the table.
 * @see \Illuminate\Database\Query\Builder::truncate
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder union(\Illuminate\Database\Query\Builder|\Closure $query, bool $all = false) Add a union statement to the query.
 * @see \Illuminate\Database\Query\Builder::union
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder unionAll(\Illuminate\Database\Query\Builder|\Closure $query) Add a union all statement to the query.
 * @see \Illuminate\Database\Query\Builder::unionAll
 *
 * @method int update(array $values) Update a record in the database.
 * @see \Illuminate\Database\Query\Builder::update
 *
 * @method bool updateOrInsert(array $attributes, array $values = []) Insert or update a record matching the attributes, and fill it with values.
 * @see \Illuminate\Database\Query\Builder::updateOrInsert
 *
 * @method \Illuminate\Database\Query\Builder useWritePdo() Use the write pdo for query.
 * @see \Illuminate\Database\Query\Builder::useWritePdo
 *
 * @method mixed value(string $column) Get a single column's value from the first result of a query.
 * @see \Illuminate\Database\Query\Builder::value
 *
 * @method \Illuminate\Database\Query\Builder when(bool $value, \Closure $callback) Apply the callback's query changes if the given "value" is true.
 * @see \Illuminate\Database\Query\Builder::when
 *
 * @method \Illuminate\Database\Query\Builder where(string|array|\Closure $column, string $operator = null, mixed $value = null, string $boolean = 'and') Add a basic where clause to the query.
 * @see \Illuminate\Database\Query\Builder::where
 *
 * @method \Illuminate\Database\Query\Builder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a where between statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereBetween
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Add a "where" clause comparing two columns to the query.
 * @see \Illuminate\Database\Query\Builder::whereColumn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereDate(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where date" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereDate
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereDay(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where day" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereDay
 *
 * @method \Illuminate\Database\Query\Builder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereExists
 *
 * @method \Illuminate\Database\Query\Builder whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = false) Add a "where in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereIn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereMonth(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where month" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereMonth
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNested(\Closure $callback, string $boolean = 'and') Add a nested where statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereNested
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotBetween(string $column, array $values, string $boolean = 'and') Add a where not between statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotBetween
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotExists(\Closure $callback, string $boolean = 'and') Add a where not exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotExists
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotIn(string $column, mixed $values, string $boolean = 'and') Add a "where not in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotIn
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotNull(string $column, string $boolean = 'and') Add a "where not null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotNull
 *
 * @method \Illuminate\Database\Query\Builder whereNull(string $column, string $boolean = 'and', bool $not = false) Add a "where null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNull
 *
 * @method \Illuminate\Database\Query\Builder whereRaw(string $sql, mixed $bindings = [], string $boolean = 'and') Add a raw where clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereRaw
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereTime(string $column, string $operator, int $value, string $boolean = 'and') Add a "where time" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereTime
 *
 * @method \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereYear(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where year" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereYear
 *
 */
class Builder
{
}
