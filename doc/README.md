Twig Extensions Reference
=========================

## Tags

Name             | Extension       | Description
-----------------|-----------------|-------------
[unless]         | Core            | Negated form of the if statement
[pygments]       | SyntaxHighlight | Highlight the code (requires [Pygments.php][pygmentsphp])

## Filters

Name             | Extension       | Description
-----------------|-----------------|-------------
[center]         | Text            | Centers the value in a field of a given width.
[filesizeformat] | Text            | Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)

## Functions

Name             | Extension       | Description
-----------------|-----------------|-------------
[lipsum]         | Text            | Generates some lorem ipsum for the template
[gist]           | Snippet         | Embed a gist
[pastebin]       | Snipeet         | Embed a pastebin

## Tests

Name             | Extension       | Description
-----------------|-----------------|-------------
[callable]       | Core            | Return whether the object is callable
[instanceof]     | Core            | Return whether a variable is an instantiated object of a certain class


[unless]: tags/unless.md
[pygments]: tags/pygments.md
[center]: filters/center.md
[filesizeformat]: filters/filesizeformat.md
[lipsum]: functions/lipsum.md
[gist]: functions/gist.md
[pastebin]: functions/pastebin.md
[callable]: tests/callable.md
[instanceof]: tests/instanceof.md

[jinja]: http://jinja.pocoo.org
[pygmentsphp]: http://github.com/kzykhys/Pygments.php