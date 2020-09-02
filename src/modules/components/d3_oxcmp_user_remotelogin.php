<?php

/**
 * This Software is the property of Data Development and is protected
 * by copyright law - it is NOT Freeware.
 * Any unauthorized use of this software without a valid license
 * is a violation of the license agreement and will be prosecuted by
 * civil and criminal law.
 * http://www.shopmodule.com
 *
 * @copyright (C) D3 Data Development (Inh. Thomas Dartsch)
 * @author    D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link      http://www.oxidmodule.com
 */

class d3_oxcmp_user_remotelogin extends d3_oxcmp_user_remotelogin_parent
{
    /**
     * @return string
     * @throws \D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException
     * @throws \D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception
     * @throws \Doctrine\DBAL\DBALException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseErrorException
     * @throws \OxidEsales\Eshop\Core\Exception\StandardException
     */
    public function d3extAdminLogin()
    {
        $oUser = oxNew('oxuser');
        $oUser->logout();

        $oConfig = oxRegistry::getRequest();

        $sUser     = $oConfig->getRequestParameter('lgn_usr');
        $sAdmUser  = $oConfig->getRequestParameter('lgn_admusr');
        $sPassword = $oConfig->getRequestParameter('lgn_admpwd');
        $sCookie   = $oConfig->getRequestParameter('lgn_cook');

        $this->setLoginStatus(USER_LOGIN_FAIL);

        // trying to login user
        try {
            /** @var $oUser d3_oxuser_remotelogin */
            $oUser = oxNew('oxuser');
            if ($oUser->d3extAdminLogin($sUser, $sAdmUser, $sPassword, $sCookie)) {
                $this->setLoginStatus(USER_LOGIN_SUCCESS);
            } else {
                $this->setLoginStatus(USER_LOGIN_FAIL);
            }
        } catch (oxUserException $oEx) {
            // for login component send excpetion text to a custom component (if defined)
            oxRegistry::get('oxUtilsView')->addErrorToDisplay($oEx, false, true, '', 'oxwservicemenu');

            return 'user';
        } catch (oxCookieException $oEx) {
            oxRegistry::get('oxUtilsView')->addErrorToDisplay($oEx);

            return 'user';
        }

        // finalizing ..
        $this->_afterLogin($oUser);

        // get Basket from User
        if (!$this->isAdmin() && !$this->getConfig()->getConfigParam('blPerfNoBasketSaving')) {
            //load basket from the database
            try {
                /** @var \OxidEsales\EshopCommunity\Application\Model\Basket $oBasket */
                if ($oBasket = $this->getSession()->getBasket()) {
                    $oBasket->load();
                }
            } catch (Exception $oE) {
                //just ignore it
            }
        }

        // we dont return "payment" -> we use "start"
        return 'start';
    }
}
