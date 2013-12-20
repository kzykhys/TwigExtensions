The Less Extension
==================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Less());
```

### Tags

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[less]           | [Less][ext-less]                       | Converts LESS to CSS

Dependencies
------------

Requires leafo/lessphp

> Add leafo/lessphp as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "leafo/lessphp": ">=0.4"
>     }
> }
> ```