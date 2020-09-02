<?php
$sLangName  = 'English';

// -------------------------------
// RESOURCE IDENTIFIER = STRING
// -------------------------------
$aLang = array(
    'charset'                          => 'ISO-8859-15',

    'D3_REMOTELOGIN_DESC_URADMUSR'     => 'admin username:',
    'D3_REMOTELOGIN_DESC_URADMPWD'     => 'admin password:',
    'D3_REMOTELOGIN_DESC_LGNASCST'     => 'Login as Customer',
    'D3_REMOTELOGIN_SHOPSELECT'        => 'Login in Mall:',
    'D3_REMOTELOGIN_SHOPSELECT_DESC'   => 'Die Mandantenauswahl steht Ihnen zur Verfügung, wenn:
                                                        <ul>
                                                            <li>Sie eine Enterprise-Edition einsetzen und</li>
                                                            <li>Sie mehrere Shopmandanten eingerichtet haben und</li>
                                                            <li>Sie erlauben, dass sich Benutzer in allen Shops anmelden können (Stammdaten -> Grundeinstellungen -> Mall) und</li>
                                                            <li>Sie dieses Modul in dem Zielmandanten unter "Erweiterungen" aktiviert haben und</li>
                                                            <li>Sie eine gültige Modullizenz im Zielmandanten eingegeben haben und </li>
                                                            <li>Sie den Aktiv-Haken am Modul im Zielmandanten gesetzt haben (D3 Module -> Modul-Connector -> Modulverwaltung)</li>
                                                        </ul> Wechseln Sie sonst im Adminbereich in den jeweiligen Shopmandanten, um sich von dort aus anzumelden.',
    'D3_REMOTELOGIN_NOSELECTABLESHOP'  => 'no selectable shop available',
    'D3_REMOTELOGIN_CURSELECT'         => 'vorgewählte Währung',
    'D3_REMOTELOGIN_CURSELECT_DESC'    => 'Die Währungsliste basiert auf dem aktuell im Adminbereich gewählten Shop. Führen Sie die Anmeldung in einen anderen Mandanten durch, kann es sein, dass dieser andere Währungen in anderer Reihenfolge verwendet. Möglicherweise waerden andere Währungen dort auch gar nicht angeboten. Diese Auswahl ist demnach unverbindlich und kann unter Umständen zu Fehlern führen. Behalten Sie im Zweifel die voreingestellte Auswahl bei.',
    'D3_REMOTELOGIN_LANGSELECT'        => 'vorgewählte Sprache',
    'D3_REMOTELOGIN_LANGSELECT_DESC'   => 'Die Sprachliste basiert auf dem aktuell im Adminbereich gewählten Shop. Führen Sie die Anmeldung in einen anderen Mandanten durch, kann es sein, dass dieser andere Sprachen in anderer Reihenfolge verwendet. Möglicherweise waerden andere Sprachen dort auch gar nicht angeboten. Diese Auswahl ist demnach unverbindlich und kann unter Umständen zu Fehlern führen. Behalten Sie im Zweifel die voreingestellte Auswahl bei.',
    'D3_REMOTELOGIN_HEADER'            => 'D³ Login as Customer',
    'D3_REMOTELOGIN_NOVALIDLICENCE'    => 'The module is not active or has no valid licence key.',

    'D3_REMOTELOGIN_LACGROUP'          => '<img src="../modules/d3/modcfg/public/d3logo.php" alt="D³" title="D³ Data Development"> Login As Customer-Gruppe',
    'D3_REMOTELOGIN_LACGROUP_DESC'     => 'Wenn Sie diesen Haken setzen, wird jeder Kunde, der im Frontent über das Login As Customer-Modul angemeldet wird, automatisch dieser Kundengruppe angehören. Diese Einstellung ist nur während der Login As Customer-Session gültig. Meldet sich der Kunde selbst üer die üblichen Login-Möglichkeiten an, ist diese Kundengruppe dann nicht verfügbar.<br><br>Weisen Sie diesen speziellen Kundengruppen daher bitte keine Benutzer zu.<br><br>Sie können diese Funktion zum Beispiel verwenden, um für fremdangemeldete Benutzer spezielle Zahlarten zur Verfügung zu stellen, die die regulären Kunden sonst nicht erhalten.',
);
