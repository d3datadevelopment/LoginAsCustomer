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
 * @author        D3 Data Development - Daniel Seifert <support@shopmodule.com>
 * @link          http://www.oxidmodule.com
 */

namespace D3\Remotelogin\modules\components {

    use OxidEsales\Eshop\Application\Component\UserComponent;

    class d3_oxcmp_user_remotelogin_parent extends UserComponent {}
}

namespace D3\Remotelogin\modules\controllers\admin {

    use OxidEsales\Eshop\Application\Controller\Admin\UserMain;

    class d3_user_main_remotelogin_parent extends UserMain {}
}

namespace D3\Remotelogin\modules\models {

    use OxidEsales\Eshop\Application\Model\User;

    class d3_oxuser_remotelogin_parent extends User {}
}