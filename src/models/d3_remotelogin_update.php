<?php

use D3\ModCfg\Application\Model\Install\d3install_updatebase;

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

class d3_remotelogin_update extends d3install_updatebase
{
    /**
     * @var string
     */
    public $sModKey      = 'd3_remote';

    /**
     * @var string${CARET}
     */
    public $sModName     = 'Login as Customer';

    /**
     * @var string${CARET}
     */
    public $sModVersion  = '3.0.1.3';

    /**
     * @var string${CARET}
     */
    public $sModRevision = '3013';

    /**
     * @var string${CARET}
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
j2Vv2==R2pVYitLekRPVjdFNE0vWHNPdWZPOWdYZGxjQm1nZXJ4UFNSYytXMklpbEE2VE9Ic0Y4NnhrV
2l4RGtuRW41elIwajIwSEUyaDVHNXZDdzNFVXBKRkVIWWpUcUxXSm1RcHlpelA0MGpiZktCeW92aXRoW
W40aDBpWlhDOGNPKzRiRFZtNTdhVlJOVUxLT1I3NEdFTHpxelh3bWJDYm40TitLL05adjVKaFlnVTc1Q
XVsNU9rbTRFYy9oWVdiSUhDNVVra1UzcHUrbW5pVjdxMERrT2xtL2FhTXlsL0ZEN0M3OVc2TjZ6YWVVN
0xsczdkYjFjYlpZSnRDSFFmbnhnU0VVVUhYSGdoZlBmb1pmVnlxWjRwdXJnYkJrbHp3TjJqTG9WQmVoT
k96UktESFZxdUxscE9VaGl3RGo2d2FMRTRXY1AxNUlOUi9oREdwUDdEdS9Lb1pRPT0=
--------------------------------------------------------------------------------
KEY;

    /**
     * @var string${CARET}
     */
    public $sRequirements = '<?xml version="1.0" encoding="UTF-8"?>
      <jobs>
        <registerModule>
          <module class="oxuser" modulepath="d3/d3_remote/modules/core/d3_oxuser_remotelogin" />
          <module class="oxcmp_user" modulepath="d3/d3_remote/modules/components/d3_oxcmp_user_remotelogin" />
          <module class="user_main" modulepath="d3/d3_remote/modules/controllers/admin/d3_user_main_remotelogin" />
        </registerModule>
      </jobs>';

    /**
     * @var string
     */
    public    $sBaseValue      = '';

    /**
     * @var array
     */
    protected $_aUpdateMethods = array(
        array('check' => 'checkModCfgItemExist',
              'do'    => 'updateModCfgItemExist'),
        array('check' => 'checkFields',
              'do'    => 'fixFields'),
        array('check' => 'checkModCfgSameRevision',
              'do'    => 'updateModCfgSameRevision'),
    );

    /**
     * @var array
     */
    public $aFields = array
    (
        'D3LOGINASCUSTGROUP'      => array
        (
            'sTableName'  => 'oxgroups',
            'sFieldName'  => 'D3LOGINASCUSTGROUP',
            'sType'       => 'TINYINT(1)',
            'blNull'      => false,
            'sDefault'    => '0',
            'sComment'    => 'via login_as_customer signed in users in this session assigned group',
            'sExtra'      => '',
            'blMultilang' => false,
        ),
    );

    /**
     * @var array
     */
    protected $_aRefreshMetaModuleIds = array('d3_remote');
}
