[{$smarty.block.parent}]

<tr>
    <td class="edittext" width="100">
        [{oxmultilang ident="D3_REMOTELOGIN_LACGROUP"}]
    </td>
    <td class="edittext">
        <input type="hidden" value="0" name="editval[oxgroups__d3loginascustgroup]">
        <input type="checkbox" class="editinput" value="1" [{if $edit->oxgroups__d3loginascustgroup->value == '1'}]checked[{/if}] name="editval[oxgroups__d3loginascustgroup]" [{$readonly}] [{$disableSharedEdit}]>
        [{oxinputhelp ident="D3_REMOTELOGIN_LACGROUP_DESC"}]
    </td>
</tr>