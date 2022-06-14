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

namespace D3\Remotelogin\modules\controllers\admin;

use Exception;
use OxidEsales\Eshop\Application\Model\ShopList;
use OxidEsales\Eshop\Core\Exception\DatabaseConnectionException;
use OxidEsales\Eshop\Core\Registry;
use OxidEsales\EshopCommunity\Internal\Container\ContainerFactory;
use OxidEsales\EshopCommunity\Internal\Framework\Database\QueryBuilderFactoryInterface;
use OxidEsales\Facts\Facts;
use OxidEsales\Eshop\Application\Model\Shop as Shop;

class d3_user_main_remotelogin extends d3_user_main_remotelogin_parent
{
    /**
     * Prüfen ob Shop eine EE && Benutzer sich in allen Shops einloggen können
     *
     * @return bool
     * @throws Exception
     */
    public function getAllMallsOk(): bool
    {
        $edition =  oxNew( Facts::class)->getEdition();
        // mall setting in admin (Benutzer koennen sich in allen Shops anmelden)
        $mallUser = Registry::getConfig()->getConfigParam( 'blMallUsers' );

        return in_array(strtoupper( $edition ), ['EE', 'B2B'], true) && $mallUser == true;
    }

    /**
     * @return array
     * @throws DatabaseConnectionException
     */
    public function d3GetMallShopList(): array
    {
        $oShopList = oxNew( ShopList::class);
        $tmpArray = [];

        /** @var $oShop Shop */
        foreach($oShopList->getList()->getArray() as $oShop)
        {
            $tmpArray[] = [
                "oxid"   => $oShop->getFieldData( 'oxid'),
                "oxname" => $oShop->getFieldData('oxname'),
                "url"    => $this->_d3getMallUrl($oShop)
            ];
        }

        return $tmpArray;
    }

    /**
     * @param Shop $oShop
     *
     * @return false|mixed|string
     * @throws Exception
     */
    protected function _d3getMallUrl(Shop $oShop)
    {
        $sUrl = '';

        if (in_array(oxNew(Facts::class)->getEdition(), ['EE', 'B2B'], true)) {
            $queryBuilder = ContainerFactory::getInstance()->getContainer()->get(QueryBuilderFactoryInterface::class)->create();
            $queryBuilder->select(Registry::getConfig()->getDecodeValueQuery())
                ->from('oxconfig')
                ->where(
                    $queryBuilder->expr()->andX(
                        $queryBuilder->expr()->eq(
                            'oxshopid',
                            $queryBuilder->createNamedParameter($oShop->getId())
                        ),
                        $queryBuilder->expr()->eq(
                            'oxvarname',
                            $queryBuilder->createNamedParameter('sMallShopURL')
                        )
                    )
                );
            $sUrl = $queryBuilder->execute()->fetchColumn();

            if (false === $sUrl || $sUrl === '') {
                // method exists in EE only
                $aUrls = $oShop->getUrls();
                $sUrl = $aUrls[0].'?shp='.$oShop->getId();
            }
        }

        return $sUrl;
    }

    /**
     * @return array
     */
    public function d3GetShopLangList(): array
    {
        return Registry::getLang()->getLanguageArray();
    }

    /**
     * @return array
     */
    public function d3GetShopCurList(): array
    {
        return Registry::getConfig()->getCurrencyArray();
    }
}
