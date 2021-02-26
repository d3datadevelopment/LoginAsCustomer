<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 *
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 *
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @link      http://www.oxidmodule.com
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'd3_remote',
    'title'       =>
        '<svg style="height:1em;width:1em"><image xlink:href="https://logos.oxidmodule.com/d3logo.svg" style="height:1em;width:1em" /></svg> '.
        'Login as Customer',
    'description' => array(
        'de' => '&Uuml;ber den Admin kann man sich als Kunde im Shop-Frontend anmelden. '
               .'Hier hat man dann die M&ouml;glichkeit Bestellungen f&uuml;r den Kunden durchzuf&uuml;hren.',
        'en' => '',
    ),
    'thumbnail'   => 'picture.png',
    'version'     => '3.0.1.3',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'http://www.oxidmodule.com/',
    'extend'      => array(
        'oxuser'        => 'd3/d3_remote/modules/models/d3_oxuser_remotelogin',
        'oxcmp_user'    => 'd3/d3_remote/modules/components/d3_oxcmp_user_remotelogin',
        'user_main'     => 'd3/d3_remote/modules/controllers/admin/d3_user_main_remotelogin',
    ),

    'files'       => array(
        'd3_remotelogin_update' => 'd3/d3_remote/models/d3_remotelogin_update.php',
    ),
    'templates'   => array(
    ),
    'events'      => array(
        'onActivate' => '\D3\ModCfg\Application\Model\Install\d3install::checkUpdateStart',
    ),
    'blocks'      => array(
        array(
            'template' => 'user_main.tpl',
            'block'    => 'd3_admin_user_main_aroundform',
            'file'     => 'views/admin/blocks/d3_remote_user_main.tpl'
        ),
        array(
            'template' => 'usergroup_main.tpl',
            'block'    => 'admin_usergroup_main_form',
            'file'     => 'views/admin/blocks/d3_remote_usergroup_main.tpl'
        ),
    ),
);
