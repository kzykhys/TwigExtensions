pygments
========

tag **pygments** in [SyntaxHighlight extension](../SyntaxHighlight.md)

> Highlight the code using Python Pygments

``` twig
{% pygments %}
<?php

phpinfo();
{% endpygments %}
```

``` twig
{% pygments go %}
package main
import "fmt"
func main() {
    fmt.Println('Hello')
}
{% endpygments %}
```

``` twig
{% pygments go linenos %}
// with line numbers
{% endpygments %}
```

Dependencies
------------

Requires Python>=2.4, Pygments

``` sh
sudo easy_install Pygments
```

Requires kzykhys/Pygments.php

> Add kzykhys/pygments as a dependency to your composer.json.
>
> ``` json
> {
>     "require": {
>         "kzykhys/pygments": ">=1.0"
>     }
> }
> ```