<td>
    {foreach from=$o.tags item=$tag name= order}
        {if $tag.status eq 'A'}
        {if $smarty.foreach.order.last}
            {$tag.tag}
        {else} {$tag.tag},
        {/if}
        {/if}
    {/foreach}
</td>

