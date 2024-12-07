<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSR_ExtManufacturers.php
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
  'MITS_GSPR_INFOHEADING' => 'Angaben gem&auml;&szlig; GPSR',
  'MITS_GSPR_MANUFACTURER_HEADING' => 'Hersteller Kontaktdaten',
  'MITS_GSPR_RESPONSIBLEPERSON_HEADING' => 'Kontaktdaten EU-Verantwortlicher',
  'MITS_GSPR_PHONE' => 'Telefon: ',
  'MITS_GSPR_PHONE2' => 'Telefon 2: ',
  'MITS_GSPR_FAX' => 'Fax: ',
  'MITS_GSPR_MAIL' => 'E-Mail-Adresse: ',
  'MITS_GSPR_HOMEPAGE' => 'Webseite: ',
);

foreach ($lang_array as $key => $val) {
    defined($key) || define($key, $val);
}
