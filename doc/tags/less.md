less
====

tag **less** in [Less extension](../Less.md)

> Compiles LESS to CSS

``` twig
{% less %}
.container {
  h1 {
    font-size:22px;
    & > small {
        color: #333;
    }
  }
}
{% endless %}
```

Dependencies
------------

Requires leafo/lessphp

> Add leafo/lessphp as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "leafo/lessphp": ">=0.4"
>     }
> }
> ```