callable
========

test **callable** in [Core extension](../Core.md)

> Checks whether the object is callable

``` php
$twig->render('template.twig', array(
    'closure' => function () { return 'Hello'; }
));
```

``` jinja
{% if closure is callable %}
  {{ call(closure) }}
{% endif %}
```

See also: [call](../functions/call.md)