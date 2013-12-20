lipsum
======

function **lipsum(paragraphs=5, html=true, min=20, max=100)** in [Text extension](../Text.md)

> Generates some lorem ipsum for the template.
> By default 5 paragraphs (<p>) are generated each paragraph between 20 and 100 words.

``` jinja
{{ lipsum() }}
```

```
Will output like this:
<p>Qeherfu gl eitnht egpu xaimfc btvixn    //..snip</p>
<p>Twwclbg ue phudflo ogzrnhwr zeosalu n   //..snip</p>
<p>Kasgahx tcewsqz pxemdid fvh ogezg fgd   //..snip</p>
<p>Givm hlray pyrd nefo ye mwbcw mcp oep   //..snip</p>
<p>Hjgdx iwfj zmllije jqme ukmw xkggqkeb   //..snip</p>
```