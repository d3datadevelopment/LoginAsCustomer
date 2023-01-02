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

use D3\Remotelogin\modules\components\d3_oxcmp_user_remotelogin;
use D3\Remotelogin\modules\controllers\admin\d3_user_main_remotelogin;
use D3\Remotelogin\modules\models\d3_oxuser_remotelogin;
use OxidEsales\Eshop\Application\Component\UserComponent;
use OxidEsales\Eshop\Application\Controller\Admin\UserMain;
use OxidEsales\Eshop\Application\Model\User;

$sMetadataVersion = '2.1';
$sLogo = '<img src="https://logos.oxidmodule.com/d3logo.svg" alt="(D3)" style="height:1em;width:1em"> ';

$aModule = [
    'id'          => 'd3_remote',
    'title'       => $sLogo.'Login as Customer',
    'description' => [
        'de' => '&Uuml;ber den Admin kann man sich als Kunde im Shop-Frontend anmelden. '
               .'Hier hat man dann die M&ouml;glichkeit Bestellungen f&uuml;r den Kunden durchzuf&uuml;hren.',
        'en' => '',
    ],
    'thumbnail'   => 'picture.png',
    'version'     => '4.0.1.1',
    'author'      => 'D&sup3; Data Development (Inh.: Thomas Dartsch)',
    'email'       => 'support@shopmodule.com',
    'url'         => 'https://www.oxidmodule.com/',
    'extend'      => [
        User::class          => d3_oxuser_remotelogin::class,
        UserComponent::class => d3_oxcmp_user_remotelogin::class,
        UserMain::class      => d3_user_main_remotelogin::class,
    ],
    'events'      => [
        'onActivate' => '\D3\Remotelogin\models\Events::onActivate',
    ],
    'blocks'      => [
        [
            'template'  => 'user_main.tpl',
            'block'     => 'd3_admin_user_main_aroundform',
            'file'      => 'views/admin/blocks/d3_remote_user_main.tpl',
            'position'  => 50
        ],
        [
            'template'  => 'usergroup_main.tpl',
            'block'     => 'admin_usergroup_main_form',
            'file'      => 'views/admin/blocks/d3_remote_usergroup_main.tpl',
            'position'  => 50
        ],
    ],
];
