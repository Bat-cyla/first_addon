
    {script src="js/addons/tags_ext/tags_autocomplete.js"}

    <div class="control-group {if $allow_save}cm-no-hide-input{/if}">
        <label class="control-label">{__("tags")}:</label>
        <div class="controls">
            <ul id="my_tags">
                <textarea name="tags" type="text" data-ca-tags="myTagsValues" class="hidden-accessible">{foreach $order_info.tags as $tag}{$tag.tag}{if !$tag@last}
                    {/if}{/foreach}</textarea>
                <input type="hidden" id="object_id" value={$order_info.order_id} />
                <input type="hidden" id="object_type" value={$order_info.user_type} />
                <input type="hidden" name="order_info[tags][]" value="" />
                <input type="hidden" id="object_name" value="order_info[tags][]" />
                {foreach from=$order_info.tags item="tag" name="tags"}<li>{$tags.tag}</li>{/foreach}
            </ul>
        </div>
    </div>
