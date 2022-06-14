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
    public $sModVersion  = '4.0.1.0';

    /**
     * @var string
     */
    public $sModRevision = '4010';

    /**
     * @var string
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
S39v2==a0QrNkJOT2hobkNlc3FiWGpUb1ZpUmhhdHg5VHZ0cXIwMGJSS1V1MGNtNXFUUmVOMmV1UkNOW
U1PaFRhckxRVGlpaHZ6dm85V01zRGp3dy81UFZ4cmJzRVVpL1lzSjVjYzNGUzVrT3I1MlZWL0JSYTg1N
mxwWnoxV21sMnJpWWg0b3E3eFkyRE9FYWk2M0lHSnh3QjBEdHRuYlJtMktwWm1tMlBSUjFNcGg1eDNCT
XNjN0FKdXB0MW82Tkx0VXJVbDlDUDFnVjBhM0k1c0h3YWVEamRYcjZjNFA3YVlrVG9BUTl5SDJsUnNYS
UQ4S3pJc3d5bDNuQ0EzYU5MWm9meWdHaDRzWldyYUN2NkJaQzQ5c3RkNDduWVc5Y3Y5MldmRzFsazEzN
ENQVEV5b1gvNW1ZZU1NeWo5SG5lSnc4Nm9IWitFYms0Zm5nSFA2bHVrZkxZckZBPT0=
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
