The Core Extension
==================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Core());
```

## Tags

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[unless]         | [Core][ext-core]                       | Negated form of the if statement

## Functions

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[call]           | [Core][ext-core]                       | Call a callback

## Tests

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[callable]       | [Core][ext-core]                       | Return whether the object is callable
[instanceof]     | [Core][ext-core]                       | Return whether a variable is an instantiated object of a certain class