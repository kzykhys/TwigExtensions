filesizeformat
==============

filter **filesizeformat(binary=false)** in [Text extension](../Text.md)

> Format the value like a ‘human-readable’ file size (i.e. 13 kB, 4.1 MB, 102 Bytes, etc)

``` jinja
{{ 1000000|filesizeformat }}
{# outputs 1.0 MB #}

{{ 1000000|filesizeformat(true) }}
{# outputs 976.6 KiB #}
```