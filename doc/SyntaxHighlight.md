The SyntaxHighlight Extension
=============================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\SyntaxHighlight());
```

### Tags

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[pygments]       | [SyntaxHighlight][ext-syntaxhighlight] | Highlight the code (requires [Pygments.php][pygmentsphp])

Dependencies
------------

Requires Python>=2.4, Pygments

``` sh
sudo easy_install Pygments
```

Requires kzykhys/Pygments.php

> Add kzykhys/pygments as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "kzykhys/pygments": ">=1.0"
>     }
> }
> ```