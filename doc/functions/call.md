call
====

function **call(args...)** in [Core extension](../Core.md)

> Call a callback

``` php
$twig->render('template.twig', array(
    'closure' => function ($name) { return 'hello ' . $name; }
));
```

``` twig
{% if closure is callable %}
  {{ call(closure, 'kzykhys') }}
{% endif %}
```

see also: [callable](../tests/callable.md)