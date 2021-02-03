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
    public $sModVersion  = '4.0.0.0';

    /**
     * @var string
     */
    public $sModRevision = '4000';

    /**
     * @var string
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
52dv2==WXJrb1V5ZEdJRWM1SW81Ti9vdVIrbDV3c0xrM1BCdEJDZHU5Y0phZmZFWHo2QmRITWdVZXpiU
zhXVEtkR3ZjZ3MwVzVMSTFkWDlUb0Y2MlpvRmloU28zUWR2K3ZVemFOeWtXSDBXSFZLZXlOTFZRNkJQU
TdYQk9xLzBlMUc3NzZLUWdwZDFVNlRGZVMvNGtqclpQQkxicEtMejJUdjNtRHJOcW9VaWJqZlBzRkZHK
2d4S0RDVnppQ21sQStDNGx0M3Iwc2FuRFJ0QXd1Zk9JUS84WG1Ec0dpZHJEc3VDQ1NFWVdZNVM2eFVVM
WZ0b3NDUkFKWUU1WThpdGJSOHRXb1ZqblpwS2YyczNtSG03K0dMbVRBZFpIb1R6VUNVdVhqRzB3TlFuc
2x5Q2x2UjhnT2tGQ0h2b21xeHhHNzRHNWRnUWpycjlpTjFjNFBVc2ZPQWZGY0dRPT0=
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
