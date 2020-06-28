php-html-parser
==========================

PHP Simple HTML DOM Parser 




Install
-------

```
composer require tekintian/phphtmlparser
```

Usage
-----

```php
use tekintian\phphtmlparser\HtmlDomParser;

...
$dom = HtmlDomParser::str_get_html( $str );
or
$dom = HtmlDomParser::file_get_html( $file_name );

$elems = $dom->find($elem_name);
...

```

