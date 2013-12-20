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