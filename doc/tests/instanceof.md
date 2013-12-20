instanceof
==========

test **instanceof** in [Core extension](../Core.md)

> Checks whether a variable is an instantiated object of a certain class

``` php
$twig->render('template.twig', array(
    'object' => new SplFileObject('access.log', 'r')
));
```

``` jinja
{% if object is instance of('SplFileInfo') %}
  {{ object.path }}
{% endif %}
```