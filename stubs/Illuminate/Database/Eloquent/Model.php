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

namespace Illuminate\Database\Eloquent;

/**
 * Illuminate\Database\Eloquent\Model stub.
 *
 * @method static \Illuminate\Database\Query\Builder addBinding(mixed $value, string $type = 'where') Add a binding to the query.
 * @see \Illuminate\Database\Query\Builder::addBinding
 *
 * @method static \Illuminate\Database\Query\Builder addNestedWhereQuery(\Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder $query, string $boolean = 'and') Add another query builder as a nested where to the query builder.
 * @see \Illuminate\Database\Query\Builder::addNestedWhereQuery
 *
 * @method static \Illuminate\Database\Query\Builder addSelect(array|mixed $column) Add a new select column to the query.
 * @see \Illuminate\Database\Query\Builder::addSelect
 *
 * @method static \Illuminate\Database\Query\Builder addWhereExistsQuery(\Illuminate\Database\Query\Builder $query, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::addWhereExistsQuery
 *
 * @method static mixed aggregate(string $function, array $columns = ['*']) Execute an aggregate function on the database.
 * @see \Illuminate\Database\Query\Builder::aggregate
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model applyScopes() Apply the scopes to the Eloquent builder instance and return it.
 * @see \Illuminate\Database\Eloquent\Builder::applyScopes
 *
 * @method static mixed average(string $column) Alias for the "avg" method.
 * @see \Illuminate\Database\Query\Builder::average
 *
 * @method static mixed avg(string $column) Retrieve the average of the values of a given column.
 * @see \Illuminate\Database\Query\Builder::avg
 *
 * @method static bool chunk(int $count, callable $callback) Chunk the results of the query.
 * @see \Illuminate\Database\Query\Builder::chunk
 *
 * @method static bool chunkById(int $count, callable $callback, string $column = 'id', string $alias = null) Chunk the results of a query by comparing numeric IDs.
 * @see \Illuminate\Database\Query\Builder::chunkById
 *
 * @method static int count(string $columns = '*') Retrieve the "count" result of the query.
 * @see \Illuminate\Database\Query\Builder::count
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder crossJoin(string $table, string $first = null, string $operator = null, string $second = null) Add a "cross join" clause to the query.
 * @see \Illuminate\Database\Query\Builder::crossJoin
 *
 * @method static \Generator cursor() Get a generator for the given query.
 * @see \Illuminate\Database\Query\Builder::cursor
 *
 * @method static int decrement(string $column, int $amount = 1, array $extra = []) Decrement a column's value by a given amount.
 * @see \Illuminate\Database\Query\Builder::decrement
 *
 * @method static int delete(mixed $id = null) Delete a record from the database.
 * @see \Illuminate\Database\Query\Builder::delete
 *
 * @method static \Illuminate\Database\Query\Builder distinct() Force the query to only return distinct results.
 * @see \Illuminate\Database\Query\Builder::distinct
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model doesntHave(string $relation, string $boolean = 'and', \Closure|null $callback = null) Add a relationship count / exists condition to the query.
 * @see \Illuminate\Database\Eloquent\Builder::doesntHave
 *
 * @method static \Illuminate\Database\Query\Builder dynamicWhere(string $method, string $parameters) Handles dynamic "where" clauses to the query.
 * @see \Illuminate\Database\Query\Builder::dynamicWhere
 *
 * @method static bool each(callable $callback, int $count = 1000) Execute a callback over each item while chunking.
 * @see \Illuminate\Database\Query\Builder::each
 *
 * @method static array eagerLoadRelations(array $models) Eager load the relationships for the models.
 * @see \Illuminate\Database\Eloquent\Builder::eagerLoadRelations
 *
 * @method static bool exists() Determine if any rows exist for the current query.
 * @see \Illuminate\Database\Query\Builder::exists
 *
 * @method static mixed|\Illuminate\Database\Eloquent\Builder find(int $id, array $columns = ['*']) Execute a query for a single record by ID.
 * @see \Illuminate\Database\Query\Builder::find
 *
 * @method static \Illuminate\Database\Eloquent\Collection findMany(array $ids, array $columns = ['*']) Find multiple models by their primary keys.
 * @see \Illuminate\Database\Eloquent\Builder::findMany
 *
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Collection findOrFail(mixed $id, array $columns = ['*']) Find a model by its primary key or throw an exception.
 * @see \Illuminate\Database\Eloquent\Builder::findOrFail
 *
 * @method static \Illuminate\Database\Eloquent\Model findOrNew(mixed $id, array $columns = ['*']) Find a model by its primary key or return fresh model instance.
 * @see \Illuminate\Database\Eloquent\Builder::findOrNew
 *
 * @method static \stdClass|array|null first(array $columns = ['*']) Execute the query and get the first result.
 * @see \Illuminate\Database\Query\Builder::first
 *
 * @method static \Illuminate\Database\Eloquent\Model firstOrCreate(array $attributes, array $values = []) Get the first record matching the attributes or create it.
 * @see \Illuminate\Database\Eloquent\Builder::firstOrCreate
 *
 * @method static \Illuminate\Database\Eloquent\Model|\Illuminate\Database\Eloquent\Model firstOrFail(array $columns = ['*']) Execute the query and get the first result or throw an exception.
 * @see \Illuminate\Database\Eloquent\Builder::firstOrFail
 *
 * @method static \Illuminate\Database\Eloquent\Model firstOrNew(array $attributes) Get the first record matching the attributes or instantiate it.
 * @see \Illuminate\Database\Eloquent\Builder::firstOrNew
 *
 * @method static \Illuminate\Database\Query\Builder forNestedWhere() Create a new query instance for nested where condition.
 * @see \Illuminate\Database\Query\Builder::forNestedWhere
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder forPage(int $page, int $perPage = 15) Set the limit and offset for a given page.
 * @see \Illuminate\Database\Query\Builder::forPage
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder forPageAfterId(int $perPage = 15, int $lastId = 0, string $column = 'id') Constrain the query to the next "page" of results after a given ID.
 * @see \Illuminate\Database\Query\Builder::forPageAfterId
 *
 * @method static mixed forceDelete() Run the default delete function on the builder.
 * @see \Illuminate\Database\Eloquent\Builder::forceDelete
 *
 * @method static \Illuminate\Database\Query\Builder from(string $table) Set the table which the query is targeting.
 * @see \Illuminate\Database\Query\Builder::from
 *
 * @method static \Illuminate\Support\Collection get(array $columns = ['*']) Execute the query as a "select" statement.
 * @see \Illuminate\Database\Query\Builder::get
 *
 * @method static array getBindings() Get the current query value bindings in a flattened array.
 * @see \Illuminate\Database\Query\Builder::getBindings
 *
 * @method static \Illuminate\Database\ConnectionInterface getConnection() Get the database connection instance.
 * @see \Illuminate\Database\Query\Builder::getConnection
 *
 * @method static int getCountForPagination(array $columns = ['*']) Get the count of the total records for the paginator.
 * @see \Illuminate\Database\Query\Builder::getCountForPagination
 *
 * @method static array getEagerLoads() Get the relationships being eagerly loaded.
 * @see \Illuminate\Database\Eloquent\Builder::getEagerLoads
 *
 * @method static \Illuminate\Database\Query\Grammars\Grammar getGrammar() Get the query grammar instance.
 * @see \Illuminate\Database\Query\Builder::getGrammar
 *
 * @method static \Closure getMacro(string $name) Get the given macro by name.
 * @see \Illuminate\Database\Eloquent\Builder::getMacro
 *
 * @method static \Illuminate\Database\Eloquent\Model getModel() Get the model instance being queried.
 * @see \Illuminate\Database\Eloquent\Builder::getModel
 *
 * @method static \Illuminate\Database\Eloquent\Model[] getModels(array $columns = ['*']) Get the hydrated models without eager loading.
 * @see \Illuminate\Database\Eloquent\Builder::getModels
 *
 * @method static \Illuminate\Database\Query\Processors\Processor getProcessor() Get the database query processor instance.
 * @see \Illuminate\Database\Query\Builder::getProcessor
 *
 * @method static \Illuminate\Database\Query\Builder getQuery() Get the underlying query builder instance.
 * @see \Illuminate\Database\Eloquent\Builder::getQuery
 *
 * @method static array getRawBindings() Get the raw array of bindings.
 * @see \Illuminate\Database\Query\Builder::getRawBindings
 *
 * @method static \Illuminate\Database\Eloquent\Relations\Relation getRelation(string $name) Get the relation instance for the given relation name.
 * @see \Illuminate\Database\Eloquent\Builder::getRelation
 *
 * @method static \Illuminate\Database\Query\Builder groupBy(...$groups) Add a "group by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::groupBy
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model has(string $relation, string $operator = '>=', int $count = 1, string $boolean = 'and', \Closure|null $callback = null) Add a relationship count / exists condition to the query.
 * @see \Illuminate\Database\Eloquent\Builder::has
 *
 * @method static \Illuminate\Database\Query\Builder having(string $column, string $operator = null, string $value = null, string $boolean = 'and') Add a "having" clause to the query.
 * @see \Illuminate\Database\Query\Builder::having
 *
 * @method static \Illuminate\Database\Query\Builder havingRaw(string $sql, array $bindings = [], string $boolean = 'and') Add a raw having clause to the query.
 * @see \Illuminate\Database\Query\Builder::havingRaw
 *
 * @method static string implode(string $column, string $glue = '') Concatenate values of a given column as a string.
 * @see \Illuminate\Database\Query\Builder::implode
 *
 * @method static \Illuminate\Database\Query\Builder inRandomOrder(string $seed = '') Put the query's results in random order.
 * @see \Illuminate\Database\Query\Builder::inRandomOrder
 *
 * @method static int increment(string $column, int $amount = 1, array $extra = []) Increment a column's value by a given amount.
 * @see \Illuminate\Database\Query\Builder::increment
 *
 * @method static bool insert(array $values) Insert a new record into the database.
 * @see \Illuminate\Database\Query\Builder::insert
 *
 * @method static int insertGetId(array $values, string $sequence = null) Insert a new record and get the value of the primary key.
 * @see \Illuminate\Database\Query\Builder::insertGetId
 *
 * @method static \Illuminate\Database\Query\Builder join(string $table, string $one, string $operator = null, string $two = null, string $type = 'inner', bool $where = false) Add a join clause to the query.
 * @see \Illuminate\Database\Query\Builder::join
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder joinWhere(string $table, string $one, string $operator, string $two, string $type = 'inner') Add a "join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::joinWhere
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder latest(string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @see \Illuminate\Database\Query\Builder::latest
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder leftJoin(string $table, string $first, string $operator = null, string $second = null) Add a left join to the query.
 * @see \Illuminate\Database\Query\Builder::leftJoin
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder leftJoinWhere(string $table, string $one, string $operator, string $two) Add a "join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::leftJoinWhere
 *
 * @method static \Illuminate\Database\Query\Builder limit(int $value) Set the "limit" value of the query.
 * @see \Illuminate\Database\Query\Builder::limit
 *
 * @method static \Illuminate\Database\Query\Builder lock(bool $value = true) Lock the selected rows in the table.
 * @see \Illuminate\Database\Query\Builder::lock
 *
 * @method static \Illuminate\Database\Query\Builder lockForUpdate() Lock the selected rows in the table for updating.
 * @see \Illuminate\Database\Query\Builder::lockForUpdate
 *
 * @method static void macro(string $name, \Closure $callback) Extend the builder with a given callback.
 * @see \Illuminate\Database\Eloquent\Builder::macro
 *
 * @method static mixed macroCall(string $method, array $parameters) Dynamically handle calls to the class.
 * @see \Illuminate\Database\Query\Builder::macroCall
 *
 * @method static mixed max(string $column) Retrieve the maximum value of a given column.
 * @see \Illuminate\Database\Query\Builder::max
 *
 * @method static \Illuminate\Database\Query\Builder mergeBindings(\Illuminate\Database\Query\Builder $query) Merge an array of bindings into our bindings.
 * @see \Illuminate\Database\Query\Builder::mergeBindings
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model mergeModelDefinedRelationConstraints(\Illuminate\Database\Eloquent\Builder $relation) Merge the constraints from a relation query to the current query.
 * @see \Illuminate\Database\Eloquent\Builder::mergeModelDefinedRelationConstraints
 *
 * @method static void mergeWheres(array $wheres, array $bindings) Merge an array of where clauses and bindings.
 * @see \Illuminate\Database\Query\Builder::mergeWheres
 *
 * @method static mixed min(string $column) Retrieve the minimum value of a given column.
 * @see \Illuminate\Database\Query\Builder::min
 *
 * @method static \Illuminate\Database\Query\Builder newQuery() Get a new instance of the query builder.
 * @see \Illuminate\Database\Query\Builder::newQuery
 *
 * @method static float|int numericAggregate(string $function, array $columns = ['*']) Execute a numeric aggregate function on the database.
 * @see \Illuminate\Database\Query\Builder::numericAggregate
 *
 * @method static \Illuminate\Database\Query\Builder offset(int $value) Set the "offset" value of the query.
 * @see \Illuminate\Database\Query\Builder::offset
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder oldest(string $column = 'created_at') Add an "order by" clause for a timestamp to the query.
 * @see \Illuminate\Database\Query\Builder::oldest
 *
 * @method static void onDelete(\Closure $callback) Register a replacement for the default delete function.
 * @see \Illuminate\Database\Eloquent\Builder::onDelete
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model orHas(string $relation, string $operator = '>=', int $count = 1) Add a relationship count / exists condition to the query with an "or".
 * @see \Illuminate\Database\Eloquent\Builder::orHas
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orHaving(string $column, string $operator = null, string $value = null) Add a "or having" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orHaving
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orHavingRaw(string $sql, array $bindings = []) Add a raw or having clause to the query.
 * @see \Illuminate\Database\Query\Builder::orHavingRaw
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhere(\Closure|string $column, string $operator = null, mixed $value = null) Add an "or where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhere
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereBetween(string $column, array $values) Add an or where between statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereBetween
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereColumn(string|array $first, string|null $operator = null, string|null $second = null) Add an "or where" clause comparing two columns to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereColumn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereDate(string $column, string $operator, string $value) Add an "or where date" statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereDate
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereExists(\Closure $callback, bool $not = false) Add an or exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereExists
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model orWhereHas(string $relation, \Closure $callback, string $operator = '>=', int $count = 1) Add a relationship count / exists condition to the query with where clauses and an "or".
 * @see \Illuminate\Database\Eloquent\Builder::orWhereHas
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereIn(string $column, mixed $values) Add an "or where in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereIn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotBetween(string $column, array $values) Add an or where not between statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotBetween
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotExists(\Closure $callback) Add a where not exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotExists
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotIn(string $column, mixed $values) Add an "or where not in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotIn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNotNull(string $column) Add an "or where not null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNotNull
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereNull(string $column) Add an "or where null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereNull
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereRaw(string $sql, array $bindings = []) Add a raw or where clause to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereRaw
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder orWhereTime(string $column, string $operator, int $value) Add an "or where time" statement to the query.
 * @see \Illuminate\Database\Query\Builder::orWhereTime
 *
 * @method static \Illuminate\Database\Query\Builder orderBy(string $column, string $direction = 'asc') Add an "order by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orderBy
 *
 * @method static \Illuminate\Database\Query\Builder orderByRaw(string $sql, array $bindings = []) Add a raw "order by" clause to the query.
 * @see \Illuminate\Database\Query\Builder::orderByRaw
 *
 * @method static \Illuminate\Contracts\Pagination\LengthAwarePaginator paginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Paginate the given query into a simple paginator.
 * @see \Illuminate\Database\Query\Builder::paginate
 *
 * @method static \Illuminate\Support\Collection pluck(string $column, string|null $key = null) Get an array with the values of a given column.
 * @see \Illuminate\Database\Query\Builder::pluck
 *
 * @method static \Illuminate\Database\Query\Expression raw(mixed $value) Create a raw database expression.
 * @see \Illuminate\Database\Query\Builder::raw
 *
 * @method static array removedScopes() Get an array of global scopes that were removed from the query.
 * @see \Illuminate\Database\Eloquent\Builder::removedScopes
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder rightJoin(string $table, string $first, string $operator = null, string $second = null) Add a right join to the query.
 * @see \Illuminate\Database\Query\Builder::rightJoin
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder rightJoinWhere(string $table, string $one, string $operator, string $two) Add a "right join where" clause to the query.
 * @see \Illuminate\Database\Query\Builder::rightJoinWhere
 *
 * @method static mixed scopes(array $scopes) Add the given scopes to the current builder instance.
 * @see \Illuminate\Database\Eloquent\Builder::scopes
 *
 * @method static \Illuminate\Database\Query\Builder select(array|mixed $columns = ['*']) Set the columns to be selected.
 * @see \Illuminate\Database\Query\Builder::select
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder selectRaw(string $expression, array $bindings = []) Add a new "raw" select expression to the query.
 * @see \Illuminate\Database\Query\Builder::selectRaw
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder selectSub(\Closure|\Illuminate\Database\Query\Builder|string $query, string $as) Add a subselect expression to the query.
 * @see \Illuminate\Database\Query\Builder::selectSub
 *
 * @method static \Illuminate\Database\Query\Builder setBindings(array $bindings, string $type = 'where') Set the bindings on the query builder.
 * @see \Illuminate\Database\Query\Builder::setBindings
 *
 * @method static \Illuminate\Database\Eloquent\Builder setEagerLoads(array $eagerLoad) Set the relationships being eagerly loaded.
 * @see \Illuminate\Database\Eloquent\Builder::setEagerLoads
 *
 * @method static \Illuminate\Database\Eloquent\Builder setModel(\Illuminate\Database\Eloquent\Model $model) Set a model instance for the model being queried.
 * @see \Illuminate\Database\Eloquent\Builder::setModel
 *
 * @method static \Illuminate\Database\Eloquent\Builder setQuery(\Illuminate\Database\Query\Builder $query) Set the underlying query builder instance.
 * @see \Illuminate\Database\Eloquent\Builder::setQuery
 *
 * @method static \Illuminate\Database\Query\Builder sharedLock() Share lock the selected rows in the table.
 * @see \Illuminate\Database\Query\Builder::sharedLock
 *
 * @method static \Illuminate\Contracts\Pagination\Paginator simplePaginate(int $perPage = 15, array $columns = ['*'], string $pageName = 'page', int|null $page = null) Get a paginator only supporting simple next and previous links.
 * @see \Illuminate\Database\Query\Builder::simplePaginate
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder skip(int $value) Alias to set the "offset" value of the query.
 * @see \Illuminate\Database\Query\Builder::skip
 *
 * @method static mixed sum(string $column) Retrieve the sum of the values of a given column.
 * @see \Illuminate\Database\Query\Builder::sum
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder take(int $value) Alias to set the "limit" value of the query.
 * @see \Illuminate\Database\Query\Builder::take
 *
 * @method static \Illuminate\Database\Query\Builder toBase() Get a base query builder instance.
 * @see \Illuminate\Database\Eloquent\Builder::toBase
 *
 * @method static string toSql() Get the SQL representation of the query.
 * @see \Illuminate\Database\Query\Builder::toSql
 *
 * @method static void truncate() Run a truncate statement on the table.
 * @see \Illuminate\Database\Query\Builder::truncate
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder union(\Illuminate\Database\Query\Builder|\Closure $query, bool $all = false) Add a union statement to the query.
 * @see \Illuminate\Database\Query\Builder::union
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder unionAll(\Illuminate\Database\Query\Builder|\Closure $query) Add a union all statement to the query.
 * @see \Illuminate\Database\Query\Builder::unionAll
 *
 * @method static int update(array $values) Update a record in the database.
 * @see \Illuminate\Database\Query\Builder::update
 *
 * @method static \Illuminate\Database\Eloquent\Model updateOrCreate(array $attributes, array $values = []) Create or update a record matching the attributes, and fill it with values.
 * @see \Illuminate\Database\Eloquent\Builder::updateOrCreate
 *
 * @method static bool updateOrInsert(array $attributes, array $values = []) Insert or update a record matching the attributes, and fill it with values.
 * @see \Illuminate\Database\Query\Builder::updateOrInsert
 *
 * @method static \Illuminate\Database\Query\Builder useWritePdo() Use the write pdo for query.
 * @see \Illuminate\Database\Query\Builder::useWritePdo
 *
 * @method static mixed value(string $column) Get a single column's value from the first result of a query.
 * @see \Illuminate\Database\Query\Builder::value
 *
 * @method static \Illuminate\Database\Query\Builder when(bool $value, \Closure $callback, \Closure $default = null) Apply the callback's query changes if the given "value" is true.
 * @see \Illuminate\Database\Query\Builder::when
 *
 * @method static \Illuminate\Database\Query\Builder where(string|array|\Closure $column, string $operator = null, mixed $value = null, string $boolean = 'and') Add a basic where clause to the query.
 * @see \Illuminate\Database\Query\Builder::where
 *
 * @method static \Illuminate\Database\Query\Builder whereBetween(string $column, array $values, string $boolean = 'and', bool $not = false) Add a where between statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereBetween
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereColumn(string|array $first, string|null $operator = null, string|null $second = null, string|null $boolean = 'and') Add a "where" clause comparing two columns to the query.
 * @see \Illuminate\Database\Query\Builder::whereColumn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereDate(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where date" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereDate
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereDay(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where day" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereDay
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereDoesntHave(string $relation, \Closure|null $callback = null) Add a relationship count / exists condition to the query with where clauses.
 * @see \Illuminate\Database\Eloquent\Builder::whereDoesntHave
 *
 * @method static \Illuminate\Database\Query\Builder whereExists(\Closure $callback, string $boolean = 'and', bool $not = false) Add an exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereExists
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\Illuminate\Database\Eloquent\Model whereHas(string $relation, \Closure|null $callback = null, string $operator = '>=', int $count = 1) Add a relationship count / exists condition to the query with where clauses.
 * @see \Illuminate\Database\Eloquent\Builder::whereHas
 *
 * @method static \Illuminate\Database\Query\Builder whereIn(string $column, mixed $values, string $boolean = 'and', bool $not = false) Add a "where in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereIn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereMonth(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where month" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereMonth
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNested(\Closure $callback, string $boolean = 'and') Add a nested where statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereNested
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotBetween(string $column, array $values, string $boolean = 'and') Add a where not between statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotBetween
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotExists(\Closure $callback, string $boolean = 'and') Add a where not exists clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotExists
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotIn(string $column, mixed $values, string $boolean = 'and') Add a "where not in" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotIn
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereNotNull(string $column, string $boolean = 'and') Add a "where not null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNotNull
 *
 * @method static \Illuminate\Database\Query\Builder whereNull(string $column, string $boolean = 'and', bool $not = false) Add a "where null" clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereNull
 *
 * @method static \Illuminate\Database\Query\Builder whereRaw(string $sql, mixed $bindings = [], string $boolean = 'and') Add a raw where clause to the query.
 * @see \Illuminate\Database\Query\Builder::whereRaw
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereTime(string $column, string $operator, int $value, string $boolean = 'and') Add a "where time" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereTime
 *
 * @method static \Illuminate\Database\Query\Builder|\Illuminate\Database\Eloquent\Builder whereYear(string $column, string $operator, mixed $value = null, string $boolean = 'and') Add a "where year" statement to the query.
 * @see \Illuminate\Database\Query\Builder::whereYear
 *
 * @method static \Illuminate\Database\Eloquent\Builder with(mixed $relations) Set the relationships that should be eager loaded.
 * @see \Illuminate\Database\Eloquent\Builder::with
 *
 * @method static \Illuminate\Database\Eloquent\Builder withCount(mixed $relations) Add subselect queries to count the relations.
 * @see \Illuminate\Database\Eloquent\Builder::withCount
 *
 * @method static \Illuminate\Database\Eloquent\Builder withGlobalScope(string $identifier, \Illuminate\Database\Eloquent\Scope|\Closure $scope) Register a new global scope.
 * @see \Illuminate\Database\Eloquent\Builder::withGlobalScope
 *
 * @method static \Illuminate\Database\Eloquent\Builder without(mixed $relations) Prevent the specified relations from being eager loaded.
 * @see \Illuminate\Database\Eloquent\Builder::without
 *
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScope(\Illuminate\Database\Eloquent\Scope|string $scope) Remove a registered global scope.
 * @see \Illuminate\Database\Eloquent\Builder::withoutGlobalScope
 *
 * @method static \Illuminate\Database\Eloquent\Builder withoutGlobalScopes(array|null $scopes = null) Remove all or passed registered global scopes.
 * @see \Illuminate\Database\Eloquent\Builder::withoutGlobalScopes
 *
 */
class Model
{
}
