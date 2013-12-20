The Markdown Extension
======================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Markdown());
```

### Filters

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[markdown]       | [Markdown][ext-markdown]               | Transform markdown into html

Dependencies
------------

Requires kzykhys/ciconia >= 1.0

> Add kzykhys/ciconia as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "kzykhys/ciconia": ">=1.0"
>     }
> }
> ```