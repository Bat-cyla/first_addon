<p>Test</p>
{if $runtime.company_id && "ULTIMATE"|fn_allowed_for || !"ULTIMATE"|fn_allowed_for}
    {include file="addons/discussion/views/discussion_manager/components/new_discussion_popup.tpl" object_company_id=0}
{/if}