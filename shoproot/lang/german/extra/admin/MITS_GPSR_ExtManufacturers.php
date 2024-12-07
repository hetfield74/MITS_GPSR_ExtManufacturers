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
  'mits_gpsr_manufacturer_heading' => 'MITS GPSR ExtManufacturers <span style="white-space:nowrap;">&copy; by <span style="padding:2px;background:#ffe;color:#6a9;font-weight:bold;">Hetfield (MerZ IT-SerVice)</span></span>',
  'mits_gpsr_manufacturer' => 'Herstellerangaben',
  'mits_gpsr_manufacturer_additional' => 'Zusatzinformationen',
  'mits_gpsr_responsibleperson' => 'EU-Verantwortlichkeit',
  'mits_gpsr_manufacturer_name' => 'Firma',
  'mits_gpsr_manufacturer_person' => 'Kontaktperson',
  'mits_gpsr_manufacturer_street' => 'Stra&szlig;e',
  'mits_gpsr_manufacturer_housenumber' => 'Hausnummer',
  'mits_gpsr_manufacturer_postalcode' => 'PLZ',
  'mits_gpsr_manufacturer_city' => 'Stadt',
  'mits_gpsr_manufacturer_state' => 'Bundesland',
  'mits_gpsr_manufacturer_country' => 'Land',
  'mits_gpsr_manufacturer_homepage' => 'Webseite',
  'mits_gpsr_manufacturer_email' => 'E-Mail',
  'mits_gpsr_manufacturer_phone_number_1' => 'Telefonnummer',
  'mits_gpsr_manufacturer_phone_number_2' => 'Telefonnummer 2',
  'mits_gpsr_manufacturer_fax_number' => 'Fax',
  'mits_gpsr_manufacturer_additional_info_1' => 'Zus&auml;tzliche Informationen 1',
  'mits_gpsr_manufacturer_additional_info_2' => 'Zus&auml;tzliche Informationen 2',
  'mits_gpsr_manufacturer_additional_info_3' => 'Zus&auml;tzliche Informationen 3',
  'mits_gpsr_responsibleperson_name' => 'Firma',
  'mits_gpsr_responsibleperson_person' => 'Kontaktperson',
  'mits_gpsr_responsibleperson_street' => 'Stra&szlig;e',
  'mits_gpsr_responsibleperson_housenumber' => 'Hausnummer',
  'mits_gpsr_responsibleperson_postalcode' => 'PLZ',
  'mits_gpsr_responsibleperson_city' => 'Stadt',
  'mits_gpsr_responsibleperson_state' => 'Bundesland',
  'mits_gpsr_responsibleperson_country' => 'Land',
  'mits_gpsr_responsibleperson_homepage' => 'Webseite',
  'mits_gpsr_responsibleperson_email' => 'E-Mail',
  'mits_gpsr_responsibleperson_phone_number_1' => 'Telefonnummer',
  'mits_gpsr_responsibleperson_phone_number_2' => 'Telefonnummer 2',
  'mits_gpsr_responsibleperson_fax_number' => 'Fax',
);

foreach ($lang_array as $key => $val) {
    defined(strtoupper($key) . '_TITLE') or define(strtoupper($key) . '_TITLE', $val);
}