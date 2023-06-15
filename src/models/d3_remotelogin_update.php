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
    public $sModVersion  = '4.0.2.0';

    /**
     * @var string
     */
    public $sModRevision = '4020';

    /**
     * @var string
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
aq1v2==THpEZXVrVm1WeTB2SmljZ0FrNkJGY0dwb2h1Mm1weUhIaGp5TUF5UUsveWFLc01zUTBsQWFaU
VNnTGVwS2h4NFVZL2xYSmw0VXNqMFk3ejF6WlpxRFdXL3hmd2N0QkpIcy9CdFBYMGZrR1JBU3VMeVJpT
2dWQi9wTnIrVXllSEMwbDR2K2ZVVEJnejkwZ0M4YW5ES05yOWkxMm0rZWxLUFFqWE5Lb3FoLzQyNm9TN
09URlFBc2ZnaEZQdE83MkNMSkFta29Rci9uZVZQTHNzTmVvNnpLUmI4SWN6TVdCVDVGSSsrdDRmWHpmc
UNmNERORmNSTm5ISzl6YSs2VTdSbE5OZUtjZTdkb2lPS2RYNm03ZXZqbGVFM3NYdXQrSjk4cWhGa0M5W
WJ3bnk5MHgwdVN2SmxvbnNuNG9RYkZob0lXL3R3MVIyeFBFcHp6RUN0aWpOTkFRPT0=
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
