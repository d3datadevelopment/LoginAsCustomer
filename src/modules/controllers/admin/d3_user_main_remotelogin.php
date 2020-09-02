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

class d3_user_main_remotelogin extends d3_user_main_remotelogin_parent
{
    /**
     * Prüfen ob Shop eine EE && Benutzer sich in allen Shops einloggen können
     *
     * @return bool
     * @throws Exception
     */
    public function getAllMallsOk()
    {
        $edition =  (new OxidEsales\Facts\Facts)->getEdition();
        $allUser = $this->getConfig()->getConfigParam( 'blMallUsers' );

        if (strtoupper($edition) == "EE" && $allUser == TRUE){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    /**
     * @return array
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws oxSystemComponentException
     */
    public function d3GetMallShopList()
    {
        $oShopList = oxnew ('oxshoplist');
        $tmpArray = array();

        /** @var $oShop oxshop */
        foreach($oShopList->getList()->getArray() as $oShop)
        {
            $tmpArray[] = array("oxid" => $oShop->getFieldData('oxid'),
                                "oxname" => $oShop->getFieldData('oxname'),
                                "url"   => $this->_d3getMallUrl($oShop)
            );
        }

        return $tmpArray;
    }

    /**
     * @param \OxidEsales\EshopCommunity\Application\Model\Shop $oShop oxshop
     *
     * @return string
     * @throws \OxidEsales\Eshop\Core\Exception\DatabaseConnectionException
     * @throws oxSystemComponentException
     * @throws Exception
     */
    protected function _d3getMallUrl(\OxidEsales\EshopCommunity\Application\Model\Shop $oShop)
    {
        if ((new OxidEsales\Facts\Facts)->getEdition())
        {
            $sSelect = "SELECT ".oxRegistry::getConfig()->getDecodeValueQuery( "oxvarvalue" )." FROM ".getViewName('oxconfig')." WHERE oxshopid = ".oxDb::getDb()->quote($oShop->getId())." AND oxvarname = 'sMallShopURL';";
            $sUrl = oxDb::getDb()->getOne($sSelect);

            if (!$sUrl)
            {
                // method exists in EE only
                $aUrls = $oShop->getUrls();
                $sUrl = $aUrls[0].'?shp='.$oShop->getId();
            }

            return $sUrl;
        }

        return '';
    }

    /**
     * @return array
     */
    public function d3GetShopLangList()
    {
        return oxRegistry::getLang()->getLanguageArray();
    }

    /**
     * @return array
     */
    public function d3GetShopCurList()
    {
        return oxRegistry::getConfig()->getCurrencyArray();
    }
}
