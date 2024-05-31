
{include file="common/subheader.tpl" title=__("extended_tags")}
{script src="js/addons/tags_ext/tags_autocomplete.js"}
<div class="control-group {if $allow_save}cm-no-hide-input{/if}">
    <label class="control-label">{__("tags")}:</label>
    <div class="controls">
        <ul id="my_tags">
                <textarea name="my_tags" type="text" data-ca-tags="myTagsValues" class="hidden-accessible">
                    {foreach $user_data.tags as $tag}
                        {$tag.tag}
                        {if !$tag@last}
                    {/if}{/foreach}</textarea>
            <input type="hidden" id="object_id" value={$user_data.order_id} />
            <input type="hidden" id="object_type" value={$user_data.user_type} />
            <input type="hidden" name="user_data[tags][]" value="" />
            <input type="hidden" id="object_name" value="user_data[tags][]" />
            {foreach from=$user_data.tags item="tag" name="tag"}<li>{$tag.tag}</li>{/foreach}
        </ul>
    </div>
</div>