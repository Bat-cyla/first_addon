
<td>
    {foreach from=$user.tags key=$k item=$tag name=user}
        {if $smarty.foreach.user.last}
            {$tag}
            {else} {$tag},
        {/if}
    {/foreach}
</td>
