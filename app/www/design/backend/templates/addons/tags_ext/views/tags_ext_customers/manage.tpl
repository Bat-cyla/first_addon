{capture name="mainbox"}

    {$c_url=$config.current_url|fn_query_remove:"sort_by":"sort_order"}
    {$tags_statuses=""|fn_get_default_statuses:false}
    {$rev=$smarty.request.content_id|default:"pagination_contents_tags"}

    {include_ext file="common/icon.tpl" class="icon-`$search.sort_order_rev`" assign=c_icon}
    {include_ext file="common/icon.tpl" class="icon-dummy" assign=c_dummy}
    <form class="form-horizontal form-edit" action="{""|fn_url}" method="post" name="tags_ext_form">

        {include file="common/pagination.tpl" save_current_page=true save_current_url=true}
        {if $tags}
            {capture name="tags_table"}
                <div class="table-responsive-wrapper longtap-selection">
                    <table width="100%" class="table table-sort table-middle table--relative table-responsive">
                        <thead
                                data-ca-bulkedit-default-object="true"
                                data-ca-bulkedit-component="defaultObject"
                        >
                        <tr>
                            <th class="left mobile-hide" width="6%">
                                {include file="common/check_items.tpl" check_statuses=$tags_statuses}

                                <input type="checkbox"
                                       class="bulkedit-toggler hide"
                                       data-ca-bulkedit-disable="[data-ca-bulkedit-default-object=true]"
                                       data-ca-bulkedit-enable="[data-ca-bulkedit-expanded-object=true]"
                                />
                            </th>
                            <th width="40%">
                                <a class="cm-ajax"
                                   href="{"`$c_url`&sort_by=tag&sort_order=`$search.sort_order_rev`"|fn_url}"
                                   data-ca-target-id="pagination_contents">
                                    {__("tag")}
                                    {if $search.sort_by=="tag"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}
                                </a>
                            </th>

                            <th width="8%" class="center">{__('customers')}</th>
                            <th width="8%">&nbsp;</th>
                            <th width="8%" class="right">
                                <a class="cm-ajax"
                                   href="{"`$c_url`&sort_by=status&sort_order=`$search.sort_order_rev`"|fn_url}"
                                   data-ca-target-id="pagination_contents">{__('customers_list_display')}
                                    {if $search.sort_by=="status"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}
                                </a>
                            </th>



                        </tr>
                        </thead>
                        {foreach from=$tags item="tag"}
                        <tbody>
                        <tr class="cm-row-status-{$tag.status|lower} cm-longtap-target"
                            data-ca-longtap-action="setCheckBox"
                            data-ca-longtap-target="input.cm-item"
                            data-ca-id="{$tag.tag_id}"
                        >
                            <td width="6%" class="left mobile-hide">

                            </td>
                            <td width="40%" data-th="{__("tag")}">
                                <input type="text" name="tags_data[{$tag.tag_id}][]" value="{$tag.tag}" size="20" class="input-hidden">
                            </td>


                                <td class="center" width="8%" ">
                                {$tag.popularity}
                                </td>
                            <td width="8%" ">
                            </td>
                                <td class="center" width="8%" >
                                <input type="checkbox" name="tags_data[{$tag.tag_id}][]" value="{$tag.status}"

                                           {if $tag.status eq 'A'}
                                               checked
                                        {elseif $tag.status eq 'D'}

                                           {/if}

                                />
                                </td>
                            <td width="8%" data-th="{__("tools")}">

                                <div class="">
                                    {capture name="tools_list"}
                                        <li>{btn type="list" class="cm-confirm" text=__("delete") href="tags_ext.delete?tag_id=`$tag.tag_id`" method="POST"}</li>
                                    {/capture}
                                    {dropdown content=$smarty.capture.tools_list}
                                </div>
                            </td>
                        </tr>
                        {/foreach}
                        </tbody>
                    </table>
                </div>
            {/capture}

            {include file="common/context_menu_wrapper.tpl"
            form="tags_form"
            object="tags"
            items=$smarty.capture.tags_table
            }

        {else}
            <p class="no-items">{__("no_data")}</p>
        {/if}

        {include file="common/pagination.tpl"}

    </form>


{/capture}

{capture name="buttons"}
    {capture name="tools_list"}
        {if $tags}
            {hook name="tags:list_extra_links"}
            {/hook}
        {/if}
    {/capture}
    {dropdown content=$smarty.capture.tools_list}
    {if $tags}
        {include file="buttons/save.tpl" but_name="dispatch[tags_ext_customers.m_update]" but_role="submit-link" but_target_form="tags_ext_form"}
    {/if}
{/capture}

{capture name="sidebar"}
    {include file="common/saved_search.tpl" dispatch="tags_ext.manage" view_type="tags_ext"}
    {include file="addons/tags_ext/views/tags_ext_customers/components/tags_search_form.tpl" dispatch="tags_ext_customers.manage"}
{/capture}

{include file="common/mainbox.tpl" title=__("tags") content=$smarty.capture.mainbox buttons=$smarty.capture.buttons sidebar=$smarty.capture.sidebar}