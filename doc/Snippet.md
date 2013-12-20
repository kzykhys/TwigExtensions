The Snippet Extension
=====================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Snippet());
```

### Functions

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[gist]           | [Snippet][ext-snippet]                 | Embed a gist
[pastebin]       | [Snippet][ext-snippet]                 | Embed a pastebin