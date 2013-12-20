pipe
====

filter **pipe(command)** in [Pipe extension][../Pipe.md]

> Executes an external command as a filter

``` jinja
{{ contents|pipe('/usr/bin/grep hello') }}
```

Dependencies
------------

Requires symfony/process >= 2.3

> Add symfony/process as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "symfony/process": ">=2.3"
>     }
> }
> ```