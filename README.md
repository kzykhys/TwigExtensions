Twig Extensions
===============

A List of Extensions
--------------------

Extension       | Description
----------------|-----------
Jinja           | Port from Python Jinja2
SyntaxHighlight | Syntax Highlighting (pygments/google-code-prettify)

Register extensions to Twig
-------------------------------

Register all extensions

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

\KzykHys\TwigExtensions\Extensions::register($twig);
```

Or doing manually

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Jinja());
```

Twig Extensions Reference
-------------------------

### Tags

Name           | Extension       | Description
---------------|-----------------|-------------
pygments       | SyntaxHighlight | Highlight the code using [Pygments.php][pygmentsphp]

### Filters

Name           | Extension       | Description
---------------|-----------------|-------------
center         | Jinja           | Centers the value in a field of a given width.
filesizeformat | Jinja           | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)

### Tests

Name           | Extension       | Description
---------------|-----------------|-------------
callable       | Jinja           | Return whether the object is callable

[pygmentsphp]: http://github.com/kzykhys/Pygments.php