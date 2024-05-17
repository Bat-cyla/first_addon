
    {script src="js/addons/tags_ext/tags_autocomplete.js"}

    <div class="control-group {if $allow_save}cm-no-hide-input{/if}">
        <label class="control-label">{__("tags")}:</label>
        <div class="controls">
            <ul id="my_tags">
                <textarea name="my_tags_values" data-ca-tags="myTagsValues" class="hidden-accessible">{foreach $object.tags as $tag}{$tag.tag}{if !$tag@last}
                    {/if}{/foreach}</textarea>
                <input type="hidden" id="object_id" value={$object_id} />
                <input type="hidden" id="object_type" value={$object_type} />
                <input type="hidden" name="{$input_name}[tags][]" value="" />
                <input type="hidden" id="object_name" value="{$input_name}[tags][]" />
                {foreach from=$order_info.tags item="tag" name="tags"}<li>{$tag.tag}</li>{/foreach}

            </ul>
        </div>
    </div>
