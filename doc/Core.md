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

[ext-core]:            Core.md
[ext-text]:            Text.md
[ext-snippet]:         Snippet.md
[ext-markdown]:        Markdown.md
[ext-syntaxhighlight]: SyntaxHighlight.md
[ext-less]:            Less.md
[ext-pipe]:            Pipe.md

[unless]:         tags/unless.md
[pygments]:       tags/pygments.md
[less]:           tags/less.md

[center]:         filters/center.md
[filesizeformat]: filters/filesizeformat.md
[markdown]:       filters/markdown.md
[md5]:            filters/md5.md
[sha1]:           filters/sha1.md
[sha512]:         filters/sha512.md
[pipe]:           filters/pipe.md

[call]:           functions/call.md
[lipsum]:         functions/lipsum.md
[gist]:           functions/gist.md
[pastebin]:       functions/pastebin.md

[callable]:       tests/callable.md
[instanceof]:     tests/instanceof.md

[twig]:           http://twig.sensiolabs.org
[jinja]:          http://jinja.pocoo.org
[pygmentsphp]:    https://github.com/kzykhys/Pygments.php
[ciconia]:        http://ciconia.kzykhys.com/
[lessphp]:        http://leafo.net/lessphp/