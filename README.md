# HTTP Message Factory

[![Latest Version](https://img.shields.io/github/release/php-http/message-factory.svg?style=flat-square)](https://github.com/php-http/message-factory/releases)
[![Software License](https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square)](LICENSE)
[![Total Downloads](https://img.shields.io/packagist/dt/php-http/message-factory.svg?style=flat-square)](https://packagist.org/packages/php-http/message-factory)

**Factory interfaces for PSR-7 HTTP Message.**


## Install

Via Composer

``` bash
$ composer require php-http/message-factory
```


## Rationale

The FIG was pretty straightforward by NOT putting any construction logic into PSR-7. However there is a need for that. This does not try to be the "de facto" way to do message construction, but tries to provide an easy way to construct messages by following already existing patterns. (For example: `MessageFactory` accepts parameters in the order they appear in a request/response: method, uri, protocol version, headers, body (in case of a request)).


## Usage

This package provides interfaces for PSR-7 factories including:

- `MessageFactory` - WIP
- `ServerRequestFactory` - WIP
- `StreamFactory` - WIP
- `UploadedFileFactory` - WIP
- `UriFactory` - WIP


A virtual package ([php-http/message-factory-implementation](https://packagist.org/providers/php-http/message-factory-implementation)) MAY be introduced which MUST be versioned together with this package.


### General usage

``` php
use Http\Message\SomeFactory;

class MyFactory implements SomeFactory
{

}
```


### Factory awares and helpers

For each factory there is a helper interface and trait to ease injecting them into other objects (such as HTTP clients).

An example:

``` php
use Http\Message\SomeFactoryAware;
use Http\Message\SomeFactoryHelper;

class HttpClient implements SomeFactoryAware
{
    use SomeFactoryHelper;
}

$client = new HttpClient();
$someFactory = $client->getSomeFactory();
$client->setSomeFactory($someFactory);
```


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.


## Security

If you discover any security related issues, please contact us at [security@php-http.org](mailto:security@php-http.org).


## License

The MIT License (MIT). Please see [License File](LICENSE) for more information.
