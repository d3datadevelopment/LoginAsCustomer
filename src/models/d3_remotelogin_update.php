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
 * @author    D3 Data Development - Daniel Seifert <ds@shopmodule.com>
 * @link      http://www.oxidmodule.com
 */

namespace D3\Remotelogin\models;

use D3\ModCfg\Application\Model\Install\d3install_updatebase;

class d3_remotelogin_update extends d3install_updatebase
{
    /**
     * @var string
     */
    public $sModKey      = 'd3_remote';

    /**
     * @var string
     */
    public $sModName     = 'Login as Customer';

    /**
     * @var string
     */
    public $sModVersion  = '4.0.1.1';

    /**
     * @var string
     */
    public $sModRevision = '4011';

    /**
     * @var string
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
0cUv2==cCtMOXhLT1VQNCt4TU1xS2pmQ0ZCV0dvMmU3Vyt1RzQ5UUVKV1Z4QUpsSGxpSGlDWENUelNyS
3A3QzFjUW9FYkZjWVg0SUtDZHdqSW5CVnp3RUhvbDc4SXNmWFNlRWFsVXhBcDFuRDQxWko4VDNKcGN6S
jk0V0JkL1pzdmpIcVVZbzJwNW9aNVdYdGRid2NtWXN4bVhjUXBueWNPRU5Jc3hoS3lOU3lqRmNlVnF3N
lhXZDdIdVlrWDI2Syt1UU8yM0NKcXB1bStSNlZRVEFjM241bGtKYjhMbjR6ZDh5YXZBWEUxRS9NcEtDb
mRpTVZpcWFXQTFMcFBIOHNJNm5Ua0tSeTdNNTVDQ0VGaE1uWDBsU0xKYlJBNmhZM3hjcjhsVXp2d1IzN
TU3QXdvQjhkd1ZqWGZ6OGtrUk5qbHFDcHViL3RvQWkvZGIraW9aYUJkeHR4cENBPT0=
--------------------------------------------------------------------------------
KEY;

    /**
     * @var string
     */
    public    $sBaseValue      = '';

    /**
     * @var array
     */
    protected $_aUpdateMethods = [
        [
            'check' => 'checkModCfgItemExist',
            'do'    => 'updateModCfgItemExist'
        ],
        [
            'check' => 'checkFields',
            'do'    => 'fixFields'
        ],
        [
            'check' => 'checkModCfgSameRevision',
            'do'    => 'updateModCfgSameRevision'
        ],
    ];

    /**
     * @var array
     */
    public $aFields = [
        'D3LOGINASCUSTGROUP'      => [
            'sTableName'  => 'oxgroups',
            'sFieldName'  => 'D3LOGINASCUSTGROUP',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => 'via login_as_customer signed in users in this session assigned group',
            'sExtra'      => '',
            'blMultilang' => false, ], ];

    /**
     * @var array
     */
    protected $_aRefreshMetaModuleIds = [ 'd3_remote' ];
}
