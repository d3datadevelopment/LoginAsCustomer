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

namespace D3\Remotelogin\modules\components;

use D3\ModCfg\Application\Model\Exception\d3_cfg_mod_exception;
use D3\ModCfg\Application\Model\Exception\d3ShopCompatibilityAdapterException;
use D3\Remotelogin\modules\models\d3_oxuser_remotelogin;
use Doctrine\DBAL\DBALException;
use Exception;
use OxidEsales\Eshop\Application\Model\User;
use OxidEsales\Eshop\Core\Exception\CookieException;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Exception\DatabaseErrorException;
use OxidEsales\Eshop\Core\Exception\StandardException;
use OxidEsales\Eshop\Core\Exception\UserException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Application\Model\Basket;
use ReflectionException;

class d3_oxcmp_user_remotelogin extends d3_oxcmp_user_remotelogin_parent
{
    /**
     * @return string
     * @throws DBALException
     * @throws DatabaseConnectionException
     * @throws DatabaseErrorException
     * @throws StandardException
     * @throws ReflectionException
     * @throws d3ShopCompatibilityAdapterException
     * @throws d3_cfg_mod_exception
     */
    public function d3extAdminLogin(): string
    {
        /** @var User $oUser */
        $oUser = oxNew(User::class);
        $oUser->logout();

        $oRequest = Registry::getRequest();

        $sUser     = $oRequest->getRequestEscapedParameter('lgn_usr');
        $sAdmUser  = $oRequest->getRequestEscapedParameter('lgn_admusr');
        $sPassword = $oRequest->getRequestEscapedParameter('lgn_admpwd');
        $sCookie   = $oRequest->getRequestEscapedParameter('lgn_cook');

        $this->setLoginStatus(USER_LOGIN_FAIL);

        // trying to login user
        try {
            /** @var $oUser d3_oxuser_remotelogin */
            $oUser = oxNew(User::class);
            if ($oUser->d3extAdminLogin($sUser, $sAdmUser, $sPassword, $sCookie)) {
                $this->setLoginStatus(USER_LOGIN_SUCCESS);
            } else {
                $this->setLoginStatus(USER_LOGIN_FAIL);
            }
        } catch (UserException $oEx) {
            // for login component send excpetion text to a custom component (if defined)
            Registry::getUtilsView()->addErrorToDisplay($oEx, false, true, '', 'oxwservicemenu');

            return 'user';
        } catch (CookieException $oEx) {
            Registry::getUtilsView()->addErrorToDisplay($oEx);

            return 'user';
        }

        // finalizing ..
        $this->_afterLogin($oUser);

        // get Basket from User
        if (!$this->isAdmin() && false === Registry::getConfig()->getConfigParam('blPerfNoBasketSaving')) {
            //load basket from the database
            try {
                /** @var Basket $oBasket */
                if ($oBasket = Registry::getSession()->getBasket()) {
                    $oBasket->load();
                }
            } catch ( Exception $oE) {
                //just ignore it
            }
        }

        // we dont return "payment" -> we use "start"
        return 'start';
    }
}
