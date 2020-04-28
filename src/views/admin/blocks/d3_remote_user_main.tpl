<script type="text/javascript">
    <!--
        function fncShopChange(value){

            formular = document.getElementById("editShopChange");
            formular.action = value;
        }
    -->
</script>

[{oxstyle include=$oViewConf->getModuleUrl('d3modcfg_lib', 'out/admin/src/d3_mod_cfg.css')}]
[{oxstyle}]

[{$smarty.block.parent}]

[{d3modcfgcheck modid="d3_remote"}]
[{/d3modcfgcheck}]

[{if $edit}]
    [{assign var="blMallSelect" value=$oView->getAllMallsOk()}]
    <div style="left: 50%; top: 15%; position: absolute;">
        <form name="extLogin" id="editShopChange" action="[{$oViewConf->getBaseDir()}]index.php?cl=start&shp=[{$oViewConf->getActiveShopId()}]&" method="post" target="_new">
            <input type="hidden" name="fnc" value="d3extAdminLogin">
            <input type="hidden" name="lgn_usr" value="[{$oxid}]">
            <table style="border: 1px solid #BDBDBD;">
                <tr>
                    <th colspan="2" style="background-color: #C8C8C8;">
                        <strong>[{oxmultilang ident="D3_REMOTELOGIN_HEADER"}]</strong>
                    </th>
                </tr>
                [{if $mod_d3_remote}]
                    <tr>
                        <td>
                            [{oxmultilang ident="D3_REMOTELOGIN_DESC_URADMUSR"}]
                        </td>
                        <td>
                            <input type="text" size="30" name="lgn_admusr" value="">
                        </td>
                    </tr>
                    <tr>
                        <td>
                            [{oxmultilang ident="D3_REMOTELOGIN_DESC_URADMPWD"}]
                        </td>
                        <td>
                            <input type="password" size="30" name="lgn_admpwd" value="">
                        </td>
                    </tr>

                    [{if $blMallSelect}]
                        <tr>
                            <td>
                                [{oxmultilang ident="D3_REMOTELOGIN_SHOPSELECT"}]
                            </td>
                            <td>
                                <select id="remoteSelectshop" class="folderselect" onchange="fncShopChange(this.value);">
                                    [{foreach from=$oView->d3GetMallShopList() item=mallshop key=id}]
                                        <option value="[{$mallshop.url}]" [{if $oViewConf->getActiveShopId() == $mallshop.oxid}] selected[{/if}]>[{$mallshop.oxname}]</option>
                                    [{/foreach}]
                                </select>
                                [{oxinputhelp ident="D3_REMOTELOGIN_SHOPSELECT_DESC"}]
                            </td>
                        </tr>
                    [{else}]
                        <tr>
                            <td>
                                [{oxmultilang ident="D3_REMOTELOGIN_SHOPSELECT"}]
                            </td>
                            <td>
                                <select class="folderselect" disabled>
                                    <option>[{oxmultilang ident="D3_REMOTELOGIN_NOSELECTABLESHOP"}]</option>
                                </select>
                                [{oxinputhelp ident="D3_REMOTELOGIN_SHOPSELECT_DESC"}]
                            </td>
                        </tr>
                    [{/if}]
                    <tr>
                        <td>
                            [{oxmultilang ident="D3_REMOTELOGIN_CURSELECT"}]
                        </td>
                        <td>
                            <select id="remoteSelectCur" name="cur" class="folderselect">
                                [{foreach from=$oView->d3GetShopCurList() item="oCur"}]
                                    <option value="[{$oCur->id}]">[{$oCur->name}]</option>
                                [{/foreach}]
                            </select>
                            [{oxinputhelp ident="D3_REMOTELOGIN_CURSELECT_DESC"}]
                        </td>
                    </tr>
                    <tr>
                        <td>
                            [{oxmultilang ident="D3_REMOTELOGIN_LANGSELECT"}]
                        </td>
                        <td>
                            <select id="remoteSelectlang" name="lang" class="folderselect">
                                [{foreach from=$oView->d3GetShopLangList() item="oLang"}]
                                    [{if $oLang->active == 1}]
                                        <option value="[{$oLang->id}]">[{$oLang->name}]</option>
                                    [{/if}]
                                [{/foreach}]
                            </select>
                            [{oxinputhelp ident="D3_REMOTELOGIN_LANGSELECT_DESC"}]
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2">
                            <input type="submit" value="[{oxmultilang ident="D3_REMOTELOGIN_DESC_LGNASCST"}]">
                        </td>
                    </tr>
                [{else}]
                    <tr>
                        <td colspan="2" class="extension_warning">
                            [{oxmultilang ident="D3_REMOTELOGIN_NOVALIDLICENCE"}]
                        </td>
                    </tr>
                [{/if}]
            </table>
        </form>
    </div>
[{/if}]