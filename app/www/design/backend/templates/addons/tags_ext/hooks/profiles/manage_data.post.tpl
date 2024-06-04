
<td>
    {foreach from=$user.tags key=$k item=$tag name=user}
        {if $tag.status eq 'A'}
        {if $smarty.foreach.user.last}
            {$tag.tag}
            {else} {$tag.tag},
        {/if}
        {/if}
    {/foreach}
</td>
