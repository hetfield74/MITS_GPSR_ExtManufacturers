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

/*
Wenn der Hersteller in der EU ansässig ist, müssen Sie keine verantwortliche Person angeben. Bitte informieren Sie sich dementsprechend.
Wenn der Hersteller nicht in der EU ansässig ist, müssen Sie zwingend eine verantwortliche Person angeben, die in der EU ansässig ist.
*/

if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_STATUS') && MODULE_MITS_GPSREXTMANUFACTURERS_STATUS == 'true') {

    if (isset($action) && ($action == 'insert' || $action == 'save')) {
        $valid_params = array(
          'mits_gpsr_manufacturer_name',
          'mits_gpsr_manufacturer_person',
          'mits_gpsr_manufacturer_street',
          'mits_gpsr_manufacturer_housenumber',
          'mits_gpsr_manufacturer_postalcode',
          'mits_gpsr_manufacturer_city',
          'mits_gpsr_manufacturer_state',
          'mits_gpsr_manufacturer_country',
          'mits_gpsr_manufacturer_homepage',
          'mits_gpsr_manufacturer_email',
          'mits_gpsr_manufacturer_phone_number_1',
          'mits_gpsr_manufacturer_phone_number_2',
          'mits_gpsr_manufacturer_fax_number',
          'mits_gpsr_manufacturer_additional_info_1',
          'mits_gpsr_manufacturer_additional_info_2',
          'mits_gpsr_manufacturer_additional_info_3',
          'mits_gpsr_responsibleperson_name',
          'mits_gpsr_responsibleperson_person',
          'mits_gpsr_responsibleperson_street',
          'mits_gpsr_responsibleperson_housenumber',
          'mits_gpsr_responsibleperson_postalcode',
          'mits_gpsr_responsibleperson_city',
          'mits_gpsr_responsibleperson_state',
          'mits_gpsr_responsibleperson_country',
          'mits_gpsr_responsibleperson_homepage',
          'mits_gpsr_responsibleperson_email',
          'mits_gpsr_responsibleperson_phone_number_1',
          'mits_gpsr_responsibleperson_phone_number_2',
          'mits_gpsr_responsibleperson_fax_number',
        );

        $mits_gpsr_data_array = array();

        foreach ($_POST as $key => $value) {
            if ((!isset(${$key}) || !is_object(${$key})) && in_array($key, $valid_params)) {
                ${$key} = xtc_db_prepare_input($value);
                $mits_gpsr_data_array[$key] = ${$key};
            }
        }

        xtc_db_perform(TABLE_MANUFACTURERS, $mits_gpsr_data_array, 'update', "manufacturers_id = " . (int)$manufacturers_id);
    }

}