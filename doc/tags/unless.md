unless
======

tag **unless** in [Core extension](../Core.md)

> Negated form of the if statement

``` jinja
{% unless false %}
  {# equivalent to "if not false" #}
{% endunless %}

{% unless users is iterable %}
  Woops, something is wrong.
{% endunless %}
```

You can't use `else` and `elseif` with `unless`. This is a bad practice.