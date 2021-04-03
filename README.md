[![Build Status](https://travis-ci.com/grizz-it/dbal.svg?branch=master)](https://travis-ci.com/grizz-it/dbal)

# GrizzIT DBAL

GrizzIT DBAL contains the interfaces required for a database integration.
It contains the minimal interfaces required for a connection and queries.
The implementations of packages are separated by connection packages and query packages.

## Installation

To install the package run the following command:

```
composer require grizz-it/dbal
```

## Usage

### GrizzIt\Dbal\Common\ConnectionInterface

The `ConnectionInterface` can be used to create an implementation to establish
a connection with a database.

### GrizzIt\Dbal\Common\FilterableQueryInterface

The `FilterableQueryInterface` is a partial interface.
It tags a query that it is filterable (for example in SQL a `WHERE` statement)
and adds the abstract function.
It accepts the addition of multiple `QueryFilterGroupInterface` and should join
them on an `AND` basis.

### GrizzIt\Dbal\Common\JoinableQueryInterface

The `JoinableQueryInterface` is a partial interface.
It tags a query that it allows join operations and adds the abstract functions.

### GrizzIt\Dbal\Common\PageableQueryInterface

The `PageableQueryInterface` is a partial interface.
It tags a query that it allows the use of limiters and paging and adds the abstract functions.

### GrizzIt\Dbal\Common\ParameterizedQueryComponentInterface

The `ParameterizedQueryComponentInterface` is a partial interface.
It tags a query that it allows the use of prepared statements and adds the abstract function.

### GrizzIt\Dbal\Common\QueryFilterGroupInterface

The `QueryFilterGroupInterface` is a filter grouping interface.
It accepts multiple `QueryFilterInterface` and should join them on an `OR` basis.

### GrizzIt\Dbal\Common\QueryFilterInterface

The `QueryFilterInterface` is the interface that contains the individual filter.

### GrizzIt\Dbal\Common\QueryInterface

The `QueryInterface` is the interface that adds the abstract function required
to export a query from the object.

### GrizzIt\Dbal\Common\QueryResultInterface

The `QueryResultInterface` is the interface that should be the result of an executed query.

### GrizzIt\Dbal\Common\SortableQueryInterface

The `SortableQueryInterface` is a partial interface.
It tags a query that is allows the use of sorting and adds the abstract function.

### GrizzIt\Dbal\Common\Enum\JoinTypeEnum

The `JoinTypeEnum` is an enum object that defines the different join types.

### GrizzIt\Dbal\Common\Enum\SortDirectionEnum

The `SortDirectionEnum` is an enum object that defined the different sorting directions.

## Official implementations

The following implementations are currently available:

### Connection packages

- [PDO](https://github.com/grizz-it/dbal-pdo)

### Query packages

- [SQL](https://github.com/grizz-it/dbal-sql)

### Query packages

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## MIT License

Copyright (c) GrizzIT

Permission is hereby granted, free of charge, to any person obtaining a copy
of this software and associated documentation files (the "Software"), to deal
in the Software without restriction, including without limitation the rights
to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
copies of the Software, and to permit persons to whom the Software is
furnished to do so, subject to the following conditions:

The above copyright notice and this permission notice shall be included in all
copies or substantial portions of the Software.

THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
SOFTWARE.
