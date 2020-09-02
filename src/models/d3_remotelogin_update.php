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
    public $sModVersion  = '3.0.1.2';

    /**
     * @var string${CARET}
     */
    public $sModRevision = '3012';

    /**
     * @var string${CARET}
     */
    public $sBaseConf = <<<KEY
--------------------------------------------------------------------------------
AEHv2==UmljZ1pxUGR6bWRROUV6Zzk0Q0IrZjdPSGpUcHloM0hsM3JxS1FyOFNsVHFEYkplZU1kYnRlQ
3NISXhwZk1hZDgvMk44NnJjOW5DZEtQN2tvc0JqQzVwUTRvNXZWeEp6YVFzMldMYklaTndWcWhMR3NXa
DBkekptdjhaZ2pUaTdFWkxiZm5FRmRnY2szKzBVaVNlRDNyUG5BMHppUzJNVTVOQWx4OGhxVHZFR2w5M
XdVQUV3MDFLdFQ3SVpROFFZSnZ5T2E1UUZkTDZOc3g2RWd0RW5CeDMwWWVBRGNOaTFtNlMzSTl3YXhZd
3RlMTdvWUNzR3VodEU1US8zbmV0U25paFNxYzJRWC9pNW9XMWkvT2VPTHhNMG9yVjIyTnRZUy9iSy96T
1FPTEluR3ByN25Dd043OE1rVENVSkpvNHQ5N211UHdyaXlXYlNKckNjRDVqNTdRPT0=
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
