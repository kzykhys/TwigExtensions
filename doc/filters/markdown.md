markdown
========

filter **markdown** in [Markdown extension](../Markdonw.md)

> Transform markdown into html

```
{{ "Hello **world**"|markdown }}
{# outputs <p>Hello <strong>world</strong></p> #}
```

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