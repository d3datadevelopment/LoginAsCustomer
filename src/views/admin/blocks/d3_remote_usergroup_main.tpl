[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3_remote"}][{/d3modcfgcheck}]

[{if $mod_d3_remote}]
    <tr>
        <td class="edittext" style="width: 100px;">
            <label for="d3loginascustgroup">[{oxmultilang ident="D3_REMOTELOGIN_LACGROUP"}]</label>
        </td>
        <td class="edittext">
            <input type="hidden" value="0" name="editval[oxgroups__d3loginascustgroup]">
            <input id="d3loginascustgroup" type="checkbox" class="editinput" value="1" [{if $edit->oxgroups__d3loginascustgroup->value == '1'}]checked[{/if}] name="editval[oxgroups__d3loginascustgroup]" [{$readonly}] [{$disableSharedEdit}]>
            [{oxinputhelp ident="D3_REMOTELOGIN_LACGROUP_DESC"}]
        </td>
    </tr>
[{/if}]