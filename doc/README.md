TwigExtensions Reference
========================

## Tags

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[unless]         | [Core][ext-core]                       | Negated form of the if statement
[pygments]       | [SyntaxHighlight][ext-syntaxhighlight] | Highlight the code (requires [Pygments.php][pygmentsphp])
[less]           | [Less][ext-less]                       | Converts LESS to CSS

## Filters

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[center]         | [Text][ext-text]                       | Centers the value in a field of a given width.
[filesizeformat] | [Text][ext-text]                       | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)
[markdown]       | [Markdown][ext-markdown]               | Transform markdown into html
[md5]            | [Text][ext-text]                       | Calculate the md5 hash of a string
[sha1]           | [Text][ext-text]                       | Calculate the sha1 hash of a string
[sha512]         | [Text][ext-text]                       | Calculate the sha512 hash of a string
[pipe]           | [Pipe][ext-pipe]                       | Executes an external command

## Functions

Name             | Extension                              | Description
-----------------|----------------------------------------|-------------
[call]           | [Core][ext-core]                       | Call a callback
[lipsum]         | [Text][ext-text]                       | Generates some lorem ipsum for the template
[gist]           | [Snippet][ext-snippet]                 | Embed a gist
[pastebin]       | [Snippet][ext-snippet]                 | Embed a pastebin

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