{if $in_popup}
    <div class="adv-search">
    <div class="group">
{else}
    <div class="sidebar-row">
    <h6>{__("admin_search_title")}</h6>
{/if}

<form action="{""|fn_url}" name="orders_search_form" method="get" class="{$form_meta}">
{capture name="simple_search"}

{hook name="orders:simple_search"}
{if $smarty.request.redirect_url}
<input type="hidden" name="redirect_url" value="{$smarty.request.redirect_url}" />
{/if}
{if $selected_section != ""}
<input type="hidden" id="selected_section" name="selected_section" value="{$selected_section}" />
{/if}

{$extra nofilter}

<div class="sidebar-field">
    <label for="cname">{__("customer")}</label>
    <input type="text" name="cname" id="cname" value="{$search.cname}" size="30" />
</div>

<div class="sidebar-field">
    <label for="email">{__("email")}</label>
    <input type="text" name="email" id="email" value="{$search.email}" size="30"/>
</div>

<div class="sidebar-field">
    <label for="phone">{__("phone")}</label>
    <input type="text" name="phone" id="phone" value="{$search.phone}" size="50"/>
</div>

<div class="sidebar-field">
    <label for="total_from">{__("total")}&nbsp;({$currencies.$primary_currency.symbol nofilter})</label>
    <input type="text" class="input-small" name="total_from" id="total_from" value="{$search.total_from}" size="3" /> - <input type="text" class="input-small" name="total_to" value="{$search.total_to}" size="3" />
</div>
{/hook}

{/capture}

{capture name="advanced_search"}

{hook name="orders:advanced_search"}

<div class="group">
    <div class="control-group">
        <label class="control-label">{__("manager")}</label>
        <div class="controls">
            <div class="nowrap">
                <div class="row-fluid ">
                    <div class="span4">
                        <input type="text" name="issuer" id="issuer" value="{$search.issuer}" size="30" />
                    </div>
                    <div class="span6 checkbox-list">
                        <label for="no_issuer">
                            <input type="checkbox" id="no_issuer" name="no_issuer" value="Y" {if $search.no_issuer}checked="checked"{/if}>{__("no_manager_assigned")}
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="group form-horizontal">
<div class="control-group">
    <label class="control-label">{__("period")}</label>
    <div class="controls">
        {include file="common/period_selector.tpl" period=$search.period form_name="orders_search_form"}
    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label">{__("order_status")}</label>
    <div class="controls checkbox-list">
        {include file="common/status.tpl" status=$search.status display="checkboxes" name="status" columns=5}
    </div>
</div>
</div>

<div class="row-fluid">
    <div class="group span6 form-horizontal">
    <div class="control-group">
        <label class="control-label" for="tax_exempt">{__("tax_exempt")}</label>
        <div class="controls">
        <select name="tax_exempt" id="tax_exempt">
            <option value="">--</option>
            <option value="Y" {if $search.tax_exempt == "Y"}selected="selected"{/if}>{__("yes")}</option>
            <option value="N" {if $search.tax_exempt == "N"}selected="selected"{/if}>{__("no")}</option>
        </select>
        </div>
    </div>
    <div class="control-group">
        <label class="control-label" for="order_id">{__("order_id")}</label>
        <div class="controls">
            <input type="text" name="order_id" id="order_id" value="{$search.order_id}" size="10"/>
        </div>
    </div>

    <div class="control-group">
        <label class="control-label" for="elm_company">{__("company")}</label>
        <div class="controls">
            <input type="text" name="company" id="elm_company" value="{$search.company}" size="10"/>
        </div>
    </div>
    </div>

    <div class="group span6 form-horizontal">
        <div class="control-group">
            <label class="control-label" for="has_credit_memo">{__("has_credit_memo")}</label>
            <div class="controls">
                <input type="checkbox" name="has_credit_memo" id="has_credit_memo" value="Y"{if $search.has_credit_memo} checked="checked"{/if} />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="crmemo_id">{__("credit_memo_id")}</label>
            <div class="controls">
                <input type="text" name="credit_memo_id" id="crmemo_id" value="{$search.credit_memo_id}" size="10"/>
            </div>
        </div>

        <div class="control-group">
            <label class="control-label" for="has_invoice">{__("has_invoice")}</label>
            <div class="controls">
                <input type="checkbox" name="has_invoice" id="has_invoice" value="Y"{if $search.has_invoice} checked="checked"{/if} />
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" for="inv_id">{__("invoice_id")}</label>
            <div class="controls">
                <input type="text" name="invoice_id" id="inv_id" value="{$search.invoice_id}" size="10"/>
            </div>
        </div>
        {include file="common/select_vendor.tpl"}
    </div>
</div>
    <div class="row-fluid">
        <div class="control-group">
        <label class="control-label" for="tags">{__("tag")}</label>
        <tr valign="top" class="delim" style="margin-left:40px">
            <td width="350px" data-th="test">
                <div class="object-selector object-selector--mobile-full-width object-selector--half-width">
                    <select id="tags" class="cm-object-selector select2-hidden-accessible" multiple=""
                            name="tags[]" data-ca-placeholder="Найти" data-ca-enable-images="true" data-ca-image-width="30"
                            data-ca-image-height="30" data-ca-enable-search="true" data-ca-page-size="10"
                            data-ca-data-url="http://localhost:8080/admin.php?dispatch=product_features.get_variants_list&amp;feature_id=550"
                            data-ca-close-on-select="false" data-select2-id="feature_variants_550" tabindex="-1" aria-hidden="true">


                            {foreach from=$tags item=$tag}
                        <option value="{$tag}" >{$tag}</option>
                                {/foreach}

                    </select>
                    <span class="select2 select2-container select2-container--default select2-container--below select2-container--open select2-container--focus" dir="ltr" data-select2-id="7" style="width: 100%;">
                        <span class="selection">
                            <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="true" tabindex="-1" aria-disabled="false" aria-owns="select2-feature_variants_550-results" aria-activedescendant="select2-feature_variants_550-result-2rgj-1202">
                                <ul class="select2-selection__rendered">
                                    {if $search.tags}
                                    {foreach from=$search.tags item=$tag}
                                <li class="select2-selection__choice" title="{$tag}">
                                    <span class="select2-selection__choice__remove" role="presentation">×</span>{$tag}
                                </li>
                                        {/foreach}
                                        {/if}
                                </ul>
                            </span>
                        </span>
                        <span class="dropdown-wrapper" aria-hidden="true">
                        </span>
                    </span>
                </div>
            </td>

        </tr>
        </div>
    </div>
<div class="group">
<div class="control-group">
    <label class="control-label">{__("shipping")}</label>
    <div class="controls checkbox-list">
        {html_checkboxes name="shippings" options=$shippings selected=$search.shippings columns=4}
    </div>
</div>
</div>

<div class="group">
<div class="control-group">
    <label class="control-label">{__("payment_methods")}</label>
    <div class="controls checkbox-list">
        {html_checkboxes name="payments" options=$payments selected=$search.payments columns=4}
    </div>
</div>
</div>
<div class="group">
    <div class="control-group">
        <label class="control-label">{__("ordered_products")}</label>
        <div class="controls ">
            {include file="common/products_to_search.tpl" placement="right"}
        </div>
    </div>
</div>
{/hook}

<div class="group">
    <div class="control-group">
{hook name="orders:search_form"}
{/hook}
    </div>
</div>

{/capture}

{include file="common/advanced_search.tpl" simple_search=$smarty.capture.simple_search advanced_search=$smarty.capture.advanced_search dispatch=$dispatch view_type="orders" in_popup=$in_popup}

</form>

{if $in_popup}
    </div></div>
{else}
    </div><hr>
{/if}
