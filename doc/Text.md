The Text Extension
==================

``` php
<?php

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Text());
```

### Filters

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[center]         | [Text][ext-text]                       | Centers the value in a field of a given width.
[filesizeformat] | [Text][ext-text]                       | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)
[md5]            | [Text][ext-text]                       | Calculate the md5 hash of a string
[sha1]           | [Text][ext-text]                       | Calculate the sha1 hash of a string
[sha512]         | [Text][ext-text]                       | Calculate the sha512 hash of a string

### Functions

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[lipsum]         | [Text][ext-text]                       | Generates some lorem ipsum for the template
