{$search|fn_print_r}
<th style="max-width: 80px" >
        <a class="cm-ajax"
           href="{"`$c_url`&sort_by=orders_count&sort_order=`$search.sort_order_rev`"|fn_url}"
           data-ca-target-id={$rev}>
            {__("reports_parameter_2")}
            {if $search.sort_by=="type"}{$c_icon nofilter}{else}{$c_dummy nofilter}{/if}
        </a>
</th>