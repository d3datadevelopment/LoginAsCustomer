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
    public $sModVersion  = '4.0.0.1';

    /**
     * @var string
     */
    public $sModRevision = '4001';

    /**
     * @var string
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
1DDv2==YnhNdkxPbnJGL1VvV0R1TThpeC9FUkFtYWcwS3pMaGdwT1pNYm5obndXUUFUZENTMy9DREFwV
nlqQnhBZDZ0VXZMaEUxTnVTN3hoRHMzMWpWWkRTblBFUmw5YVNnY1gvMzkyY3JIMWZzQWRVMGI1VllVM
0U1cGRaSWZkNU9tYWI3eE51NVE0bXFncUtjSmpzM2l2VWRFY0dOeFpicUpzTnNBNW9SWld1dzRtbWVoR
Wx4RHNlMnRRR0FRNXMvWTJ6a3c1ZEQ0NUdVVmNnY09MRnltNkI2ZHpWUTQ1SW5rVmUwN0RkT2pUMUdXe
HpoZ3lYNGhJUHVoVEtlb0RzYVlVM3N1eGN3Y0ZBdGlnRWpYcnJaRXpjM2tKTmZ1alVLZGlwbFRoVURzO
ElXNU9KQjZZY3NmR2pwakVzZEN4YkpYcVZidnJZTmVvb0hNV04yeHJIaDVlcFN3PT0=
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
