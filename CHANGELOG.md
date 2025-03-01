Change Log
==========

2021-06-05 - 3.3.6
------------------

 * Improvements to OpenApiGenerator, with thanks to [Jason Hofer](https://github.com/jasonhofer)

2021-05-28 - 3.3.5
------------------

 * Add tag definitions to the main openapi configuration block in the package settings

2021-05-27 - 3.3.4
------------------

 * Fix incorrect usage of summary/description when building path and operation definitions
   * summary/description are kept but are now assigned to the path object
   * a separate `methods` key has been added to define summary/description/operationId for each method
   * `deprecated` has been added to the operation
   * `operation` is now `operationId`
   * if there is no summary/description/operationId the summary is set to the route path
 * Fix cache item was missing the save call

2021-05-26 - 3.3.3
------------------

 * Fix additional bugs in `OpenApiGenerator`:
   * nested schemas are not being aliased correctly
   * schemas not in "schemas" folder were not being imported correctly
   * nested schema files cannot use a `/` - only a-z, - _ and . are allowed
   * required fields in nested objects that have no required fields should not be set
 * Fix incorrect documentation in `HasOpenApiExamples`, it is value (singular)

2021-05-26 - 3.3.2
------------------

 * Fix bug in `OpenApiGenerator` array union operator does not merge all values

2021-05-12 - 3.3.1
------------------

 * Fix in `ApiController` where route parameters are not passed to URL generation

2021-04-28 - 3.3.0
------------------

 * Add helper to generate absolute URLs from the current request/form request object
 * Add trait for adding bus helpers (if using `somnambulist/domain`) on `ApiController`

2021-04-27 - 3.2.0
------------------

 * Add support for examples through the `HasOpenApiExamples` interface for FormRequests
 * Add description to route defaults meta-data for long descriptions
 * Split up the docs into smaller individual files

2021-04-23 - 3.1.0
------------------

 * Add default values to `GetPaginationFromParameterBag` trait for easier implementation

2021-04-16
----------

 * Add `ServiceList` as a default schema example
 * Fix bug handling form request rules: they can be arrays of rules
 * Fix bug where `MutableCollection` is being used, but it is not a dependency
 * Refactor `RequestArgumentHelper` to use traits so functionality can be shared
 * Make trait properties and methods protected instead of private

2021-04-14
----------

 * Add initial API documentation generation by using conventions / config
 * Add example default schema definitions for Error and Pagination

2021-03-23 - 3.0.2
------------------

 * Fix bug in `nullOrValue` would not return null in array of fields with `subNull` true

2021-03-18
----------

 * Update `UuidValueResolver` to allow resolving any type of `AbstractIdentity` value object

2021-03-17 - 3.0.1
------------------

 * Add ability to allow null values for multiple fields in `RequestArgumentHelper::nullOrValue`

2021-02-05
----------

 * Add priority to event subscribers to avoid collisions with `somnambulist/form-request-bundle`

2021-01-21 - 3.0.0
------------------

 * Require PHP 8
 * Update to domain 4.0 and read-models 3.0 

2021-01-18
----------

 * Update tests after namespacing
 * Fix PHP8 compatibilities

Note: this version was originally 3.0.0; however it was tagged prematurely and 3.0.0
has been re-released as a PHP 8+ library.

2020-08-29
----------

 * Re-namespace to `Somnambulist\Bundles`

2020-08-26 - 2.0.0
------------------

 * Require PHP 7.4
 * Require Symfony 5+
 * Major refactoring of the internals with many BC breaks
 * Add extra transformers 

2020-08-21 - 1.7.5
------------------

 * Fix using deprecated `JsonResponse::create()` method

2020-05-22 - 1.7.4
------------------

 * Fix bug where all collections are treated as a paginator in `ResponseFactory`
 * Made URL required on paginator bindings

2020-04-08 - 1.7.3
------------------

 * Add default option to `RequestArgumentHelper::orderBy`

2020-03-31 - 1.7.2
------------------

 * Fix rare instance when request_id has not been set in injector subscriber

2020-02-20 - 1.7.1
------------------

 * Fix only set `request_id` in processor extra data if there actually is one

2020-02-18 - 1.7.0
------------------

 * Added `RequestIdInjectorSubscriber` to automatically handle setting request ids

2020-02-11 - 1.6.2
------------------

 * Fix missed type-hint that needs to be `Throwable` in ExceptionListener
 
2020-02-05 - 1.6.1
------------------

 * Update samj/fractal-bundle to 3.X branch for SF 5

2019-11-07 - 1.6.0
------------------

 * Added Symfony 5 support

2019-11-07 - 1.5.0
------------------

 * Added `orderBy` to RequestArgumentHelper for processing order by request arg.

2019-11-07 - 1.4.0
------------------

 * Added `nullOrValue` helper to fetch multiple values from the request fields
   The method works on the `ParameterBag` from the request so can work on GET or POST data.
 * Changed `ExceptionConverterInterface` to use `Throwable` to be able to handle `ErrorExceptions`

2019-11-07 - 1.3.0
------------------

 * Refactored `AssertionExceptionConverter` into 2 separate converters
 * Added `LazyAssertionExceptionConverter`
 * Changed output of errors to match FormRequest message/errors field array

2019-11-07 - 1.2.0
------------------

 * Expanded `UuidValueResolver` to work on any named UUID property

2019-11-07 - 1.1.0
------------------

 * Added messenger exception converter
 * Added tag support for register exception converters (`somnambulist.api_bundle.exception_converter`)
 * Added exception class name to debug output
 * Refactored exception conversion to a separate service

2019-11-04 - 1.0.3
------------------

 * Fixed bug in `ResponseFactory` not correctly initialising parsed URL array

2019-10-25 - 1.0.2
------------------

 * Added controller argument resolvers for UUID and `ExternalIdentity`
 * Added `includes()` to `ApiController` and `RequestArgumentHelper` service

2019-10-22 - 1.0.1
------------------

 * Fixed bug with alias of `perPage` (was per_page)

2019-10-18 - 1.0.0
------------------

Initial commit.
