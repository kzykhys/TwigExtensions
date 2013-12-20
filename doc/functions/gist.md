gist
====

function **gist(gist, file=null)** in [Snippet extension](../Snippet.md)

> Embed a Github Gist

``` jinja
{{ gist(6316404) }}
{{ gist(6316404, 'default.conf') }}
```

```
Outputs:
<script src="https://gist.github.com/6316404.js"></script>
<script src="https://gist.github.com/6316404.js?file=default.conf"></script>
```
