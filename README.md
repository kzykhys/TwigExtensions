Twig Extensions
===============

Add more fun to [Twig][twig]. Inspired by Jinja2, Jekyll ...

``` jinja
{% block css %}
  <style type="text/css">
  {% less %}
    {% include 'mixins.less' %}
    .container {
      .row {
        &:first-child { margin-bottom: @m; }
      }
    }
  {% endless %}
  </style>
{% endblock %}

{% unless user.active %}
  <div class="alert">Please <a href="#">Login</a></div>
{% endunless %}

{{ gist(6421704) }}

{{ post.content|markdown }}

{% pygments brainfuck linenos %}
+++++++++[>++++++++>+++++++++++>+++++<<<-]>.>++.+++++++..+++.>-.
------------.<++++++++.--------.+++.------.--------.>+.
{% endpygments %}
```

Customized filesystem loader

``` php
<?php

use KzykHys\TwigExtensions\Loader\Filesystem;

$loader = new Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

$twig->render(array('date.twig', 'archive.twig', 'default.twig'));
```

Requirements
------------

* PHP5.3

### Optional requirements

*   Python2.4+ and Pygments ([kzykhys/Pygments.php][pygmentsphp]) for SyntaxHighlight extension

    ``` json
    {
        "require": {
            "kzykhys/pygments": ">=1.0"
        }
    }
    ```

*   PHP5.4+ and [kzykhys/Ciconia][ciconia] for Markdown extension

    ``` json
    {
        "require": {
            "kzykhys/ciconia": ">=1.0"
        }
    }
    ```

*   [leafo/lessphp][lessphp] for Less extension

    ``` json
    {
        "require": {
            "leafo/lessphp": ">=0.4"
        }
    }
    ```

*   [symfony/process][symfony-process] for Pipe extension

    ``` json
    {
        "require": {
            "symfony/process": ">=2.3"
        }
    }
    ```

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

use KzykHys\TwigExtensions\ExtensionAggregate;

$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);

// Registers all extensions
$twig->setExtensions(ExtensionAggregate::getExtensions());
```

A List of Extensions
--------------------

Extension                              | Description
---------------------------------------|-----------
[Core][ext-core]                       | Provides tags and tests
[Text][ext-text]                       | Utilities for strings
[Snippet][ext-snippet]                 | Embedding various snippets
[Markdown][ext-markdown]               | Github Flavored Markdown support
[SyntaxHighlight][ext-syntaxhighlight] | Syntax Highlighting (pygments/google-code-prettify)
[Less][ext-less]                       | Compiles LESS to CSS
[Pipe][ext-pipe]                       | Use external commands as filters

Registering extensions to Twig
-------------------------------

Register all-in-one extension

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\ExtensionAggregate());
```

Or register extensions which you like

``` php
$loader = new Twig_Loader_Filesystem('/path/to/templates');
$twig   = new Twig_Environment($loader);
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Core());
$twig->addExtension(new \KzykHys\TwigExtensions\Extension\Snippet());
```

Twig Extensions Reference
-------------------------

### Tags

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[unless]         | [Core][ext-core]                       | Negated form of the if statement
[pygments]       | [SyntaxHighlight][ext-syntaxhighlight] | Highlight the code (requires [Pygments.php][pygmentsphp])
[less]           | [Less][ext-less]                       | Converts LESS to CSS

### Filters

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[center]         | [Text][ext-text]                       | Centers the value in a field of a given width.
[filesizeformat] | [Text][ext-text]                       | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)
[markdown]       | [Markdown][ext-markdown]               | Transform markdown into html
[md5]            | [Text][ext-text]                       | Calculate the md5 hash of a string
[sha1]           | [Text][ext-text]                       | Calculate the sha1 hash of a string
[sha512]         | [Text][ext-text]                       | Calculate the sha512 hash of a string
[pipe]           | [Pipe][ext-pipe]                       | Executes an external command

### Functions

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[call]           | [Core][ext-core]                       | Call a callback
[lipsum]         | [Text][ext-text]                       | Generates some lorem ipsum for the template
[gist]           | [Snippet][ext-snippet]                 | Embed a gist
[pastebin]       | [Snippet][ext-snippet]                 | Embed a pastebin

### Tests

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[callable]       | [Core][ext-core]                       | Return whether the object is callable
[instanceof]     | [Core][ext-core]                       | Return whether a variable is an instantiated object of a certain class

License
-------

The MIT License

Author
------

Kazuyuki Hayashi (@kzykhys)


[ext-core]:            doc/Core.md
[ext-text]:            doc/Text.md
[ext-snippet]:         doc/Snippet.md
[ext-markdown]:        doc/Markdown.md
[ext-syntaxhighlight]: doc/SyntaxHighlight.md
[ext-less]:            doc/Less.md
[ext-pipe]:            doc/Pipe.md

[unless]:          doc/tags/unless.md
[pygments]:        doc/tags/pygments.md
[less]:            doc/tags/less.md

[center]:          doc/filters/center.md
[filesizeformat]:  doc/filters/filesizeformat.md
[markdown]:        doc/filters/markdown.md
[md5]:             doc/filters/md5.md
[sha1]:            doc/filters/sha1.md
[sha512]:          doc/filters/sha512.md
[pipe]:            doc/filters/pipe.md

[call]:            doc/functions/call.md
[lipsum]:          doc/functions/lipsum.md
[gist]:            doc/functions/gist.md
[pastebin]:        doc/functions/pastebin.md

[callable]:        doc/tests/callable.md
[instanceof]:      doc/tests/instanceof.md

[twig]:            http://twig.sensiolabs.org
[jinja]:           http://jinja.pocoo.org
[pygmentsphp]:     https://github.com/kzykhys/Pygments.php
[ciconia]:         http://ciconia.kzykhys.com/
[lessphp]:         http://leafo.net/lessphp/
[symfony-process]: http://symfony.com/doc/current/components/process.html