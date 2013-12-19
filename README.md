Twig Extensions
===============

Add more fun to [Twig][twig]. Inspired by Jinja2, Jekyll.

``` twig
{% unless user.active %}
  <div class="alert">Please <a href="#">Login</a></div>
{% endunless %}

{{ gist(6421704) }}
{{ gist(6316404, 'default.conf') }}

{% pygments go linenos %}
package main

import "fmt"

func main() {
    fmt.Println("Hello World!")
}
{% endpygments %}
```

Requirements
------------

* PHP5.3

### Optional requirements

* Python2.4+ and Pygments ([kzykhys/Pygments.php][pygmentsphp]) for SyntaxHighlight extension

Installation
------------

``` json
{
    "require": {
        "kzykhys/twig-extensions": "dev-master"
    }
}
```

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

// Registers all extensions
$twig->addExtension(new \KzykHys\TwigExtensions\ExtensionAggregate());
```

A List of Extensions
--------------------

Extension       | Description
----------------|-----------
Core            | Provides tags and tests
Text            | Utilities for strings (Some of them are inspired by Python [Jinja2][jinja])
Snippets        | Embedding various snippets
SyntaxHighlight | Syntax Highlighting (pygments/google-code-prettify)

Register extensions to Twig
-------------------------------

Register all extensions

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\ExtensionAggregate());
```

Or doing it manually

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Core());
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Snippet());
```

Twig Extensions Reference
-------------------------

### Tags

Name             | Extension       | Description
-----------------|-----------------|-------------
[unless]         | Core            | Negated form of the if statement
[pygments]       | SyntaxHighlight | Highlight the code (requires [Pygments.php][pygmentsphp])

### Filters

Name             | Extension       | Description
-----------------|-----------------|-------------
[center]         | Text            | Centers the value in a field of a given width.
[filesizeformat] | Text            | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)

### Functions

Name             | Extension       | Description
-----------------|-----------------|-------------
[lipsum]         | Text            | Generates some lorem ipsum for the template
[gist]           | Snippet         | Embed a gist
[pastebin]       | Snipeet         | Embed a pastebin

### Tests

Name             | Extension       | Description
-----------------|-----------------|-------------
[callable]       | Core            | Return whether the object is callable
[instanceof]     | Core            | Return whether a variable is an instantiated object of a certain class


[unless]: doc/tags/unless.md
[pygments]: doc/tags/pygments.md
[center]: doc/filters/center.md
[filesizeformat]: doc/filters/filesizeformat.md
[lipsum]: doc/functions/lipsum.md
[gist]: doc/functions/gist.md
[pastebin]: doc/functions/pastebin.md
[callable]: doc/tests/callable.md
[instanceof]: doc/tests/instanceof.md

[twig]: http://twig.sensiolabs.org
[jinja]: http://jinja.pocoo.org
[pygmentsphp]: http://github.com/kzykhys/Pygments.php