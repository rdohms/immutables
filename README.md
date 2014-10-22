# Immutables

This package provides some immutable object types.

## Interfaces

[**ImmutablesException**](https://github.com/heybigname/immutables/blob/master/src/ImmutablesException.php)

This interface provides package-level exception catching.

## Exceptions

[**InvalidType**](https://github.com/heybigname/immutables/blob/master/src/InvalidType.php)

This exception is thrown when an invalid type is inserted into a [TypedImmutableArray](https://github.com/heybigname/immutables/blob/master/src/TypedImmutableArray.php).

[**CannotModifyImmutable**](https://github.com/heybigname/immutables/blob/master/src/CannotModifyImmutable.php)

This exception is thrown when an immutable object modification is attempted.

## Classes

[**ImmutableArray**](https://github.com/heybigname/immutables/blob/master/src/ImmutableArray.php)

An array object that cannot be modified once it's created.

## Abstract Classes

[**TypedImmutableArray**](https://github.com/heybigname/immutables/blob/master/src/TypedImmutableArray.php)

An immutable array base-class designed to provide strict type-checking on creation.

An [example implementation](https://github.com/heybigname/immutables/blob/master/spec/stubs/ArbitrarilyTypedImmutableArray.php) can be found as a test stub.

## Installation

Run the command below to install via Composer

```shell
composer require heybigname/immutables
```
