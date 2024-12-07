<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSRExtManufacturers.php
 * Date: 06.12.2024
 * Time: 16:17
 *
 * Author: Hetfield
 * Copyright: (c) 2024 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

$lang_array = array(
  'MODULE_MITS_GPSREXTMANUFACTURERS_TITLE' => 'MITS GPSR ExtManufacturers <span style="white-space:nowrap;">&copy; by <span style="padding:2px;background:#ffe;color:#6a9;font-weight:bold;">Hetfield (MerZ IT-SerVice)</span></span>',
  'MODULE_MITS_GPSREXTMANUFACTURERS_DESCRIPTION' => '
        <a href="https://www.merz-it-service.de/" target="_blank">
          <img src="' . (ENABLE_SSL === true ? HTTPS_SERVER : HTTP_SERVER) . DIR_WS_CATALOG . DIR_WS_IMAGES . 'merz-it-service.png" border="0" alt="MerZ IT-SerVice" style="display:block;max-width:100%;height:auto;" />
        </a><br />
        <p><strong>Herstellerangaben nach GPSR erweitern</strong></p>
        <div style="text-align:center;">
          <small>Nur auf Github gibt es immer die aktuellste Version des Moduls!</small><br />
          <a style="background:#6a9;color:#444" target="_blank" href="https://github.com/hetfield74/MITS_GPSR_ExtManufacturers" class="button" onclick="this.blur();">MITS GPSR ExtManufacturers on Github</a>
        </div>
        <p>Bei Fragen, Problemen oder W&uuml;nschen zu diesem Modul oder auch zu anderen Anliegen rund um die modified eCommerce Shopsoftware nehmen Sie einfach Kontakt zu uns auf:</p> 
        <div style="text-align:center;"><a style="background:#6a9;color:#444" target="_blank" href="https://www.merz-it-service.de/Kontakt.html" class="button" onclick="this.blur();">Kontaktseite auf MerZ-IT-SerVice.de</strong></a></div>
    ',
  'MODULE_MITS_GPSREXTMANUFACTURERS_STATUS_TITLE' => 'Status',
  'MODULE_MITS_GPSREXTMANUFACTURERS_STATUS_DESC' => 'Modul aktivieren',
  'MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_ADD_DESC_TITLE' => 'Notwendigen Herstellerangaben erweitern?',
  'MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_ADD_DESC_DESC' => 'Geben Sie hier bitte an, ob die zus&auml;tzlichen Angaben dieses Moduls im Frontend in die "Notwendigen Herstellerangaben" bei der Artikelbeschreibung integriert werden sollen.',
  'MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_LISTING_DESC_TITLE' => 'Herstellerbeschreibung in Listing erweitern?',
  'MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_LISTING_DESC_DESC' => 'Geben Sie hier bitte an, ob die zus&auml;tzlichen Angaben dieses Moduls im Frontend in die Herstellerbeschreibung im Product Listing integriert werden sollen.',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
