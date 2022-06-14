<?php
$sLangName  = 'English';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = [
    'charset'                          => 'ISO-8859-15',

    'D3_REMOTELOGIN_DESC_URADMUSR'     => 'admin username:',
    'D3_REMOTELOGIN_DESC_URADMPWD'     => 'admin password:',
    'D3_REMOTELOGIN_DESC_LGNASCST'     => 'Login as Customer',
    'D3_REMOTELOGIN_SHOPSELECT'        => 'Login in Mall:',
    'D3_REMOTELOGIN_SHOPSELECT_DESC'   => 'The client selection is available if:
        <ul>
            <li>you are using an Enterprise Edition and</li>
            <li>you have set up several shop clients and</li>
            <li>you allow users to log in from other shops (Master Settings -> Core Settings -> Mall) and</li>
            <li>you have activated this module in the target client under "Extensions" and</li>
            <li>you have entered a valid module licence in the target client and </li>
            <li>you have set the active checkbox at the module in the target client (D3 Modules -> Module Connector -> Module Administration)</li>
        </ul> Otherwise, switch to the respective shop client in the admin area to log in from there.',
    'D3_REMOTELOGIN_NOSELECTABLESHOP'  => 'no selectable shop available',
    'D3_REMOTELOGIN_CURSELECT'         => 'preselected currency',
    'D3_REMOTELOGIN_CURSELECT_DESC'    => 'The currency list is based on the shop currently selected in the admin area. If you log on to another client, it may be that this client uses other currencies in a different order. It is also possible that other currencies are not offered there at all. This selection is therefore not binding and may lead to errors. If in doubt, keep the preset selection.',
    'D3_REMOTELOGIN_LANGSELECT'        => 'preselected language',
    'D3_REMOTELOGIN_LANGSELECT_DESC'   => 'The language list is based on the shop currently selected in the admin area. If you log on to another client, it is possible that this client will use other languages in a different order. It is also possible that other languages are not offered there at all. This selection is therefore not binding and may lead to errors. If in doubt, keep the preset selection.',
    'D3_REMOTELOGIN_ANALYSISMODE'      => 'analysis mode',
    'D3_REMOTELOGIN_ANALYSISMODE_DESC' => 'When logging in via this form, additional customer groups are activated for the user, which the regular shop visitor does not have (can be activated at the customer groups). This makes it possible to make special payment methods available to users who are not registered. However, this is a hindrance to the analysis of regular shop behaviour. Check this box to prevent the temporary addition of user groups. To switch between the analysis mode and the regular mode, please log in to the frontend using this form.',
    'D3_REMOTELOGIN_HEADER'            => '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> Login as Customer',
    'D3_REMOTELOGIN_NOVALIDLICENCE'    => 'The module is not active or has no valid licence key.',

    'D3_REMOTELOGIN_LACGROUP'          => '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> Login As Customer-Gruppe',
    'D3_REMOTELOGIN_LACGROUP_DESC'     => 'If you check this box, every customer who is logged in to Frontent via the Login As Customer module will automatically belong to this customer group. This setting is only valid during the Login As Customer session. If the customer logs in himself via the usual login options, this customer group will then not be available.<br><br>Therefore, please do not assign any users to these special customer groups.<br><br>You can use this function, for example, to make special payment types available to users logged in by others, which the regular customers do not otherwise receive.',
];
