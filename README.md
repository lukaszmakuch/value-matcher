# Value matcher

Allows to check whether two values somehow match.

## Usage

### StrictStringMatcher
```php
$m = new \lukaszmakuch\ValueMatcher\String\StrictStringMatcher("Abc");
$m->matches("Abc"); //true
$m->matches("abc"); //false
```
### RegExpStringMatcher
```php
$m = new \lukaszmakuch\ValueMatcher\String\RegExpStringMatcher("@^[a-z]x$@");
$m->matches("cx"); //true
$m->matches("xc"); //false
```

## Installation
Use [composer](https://getcomposer.org) to get the latest version:
```
$ composer require lukaszmakuch/value-matcher
```
