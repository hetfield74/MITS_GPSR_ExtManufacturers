<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSRExtManufacturers.php
 * Date: 06.12.2024
 * Time: 16:06
 *
 * Author: Hetfield
 * Copyright: (c) 2024 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

defined('_VALID_XTC') or die('Direct Access to this location is not allowed.');

class MITS_GPSRExtManufacturers {

    public $code;
    public $name;
    public $version;
    public $title;
    public $description;
    public $sort_order;
    public $enabled;
    public $_check;

    function __construct() {
        $this->code = 'MITS_GPSRExtManufacturers';
        $this->name = 'MODULE_' . strtoupper($this->code);
        $this->version = '1.0.0';
        $this->title = defined($this->name . '_TITLE') ? constant($this->name . '_TITLE') . ' - v' . $this->version : $this->code . ' - v' . $this->version;
        $this->description = defined($this->name . '_DESCRIPTION') ? constant($this->name . '_DESCRIPTION') : '';
        $this->enabled = defined($this->name . '_STATUS') && constant($this->name . '_STATUS') == 'true';
        $this->sort_order = defined($this->name . '_SORT_ORDER') ? constant($this->name . '_SORT_ORDER') : '';

        $version_query = xtc_db_query("SELECT configuration_value FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = '" . $this->name . "_VERSION'");
        if (xtc_db_num_rows($version_query)) {
            xtc_db_query("UPDATE " . TABLE_CONFIGURATION . " SET configuration_value = '" . $this->version . "' WHERE configuration_key = '" . $this->name . "_VERSION'");
        } elseif (defined($this->name . '_STATUS')) {
            xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('" . $this->name . "_VERSION', '" . $this->version . "', 6, 99, NULL, now())");
        }
    }

    function process($file) {
        //do nothing
    }

    function display() {
        return array(
          'text' => '<br /><div align="center">' . xtc_button(BUTTON_SAVE) .
            xtc_button_link(BUTTON_CANCEL, xtc_href_link(FILENAME_MODULE_EXPORT, 'set=' . $_GET['set'] . '&module=' . $this->code)) . "</div>");
    }

    function check() {
        if (!isset($this->_check)) {
            if (defined($this->name . '_STATUS')) {
                $this->_check = true;
            } else {
                $check_query = xtc_db_query("SELECT configuration_value FROM " . TABLE_CONFIGURATION . " WHERE configuration_key = '" . $this->name . "_STATUS'");
                $this->_check = xtc_db_num_rows($check_query);
            }
        }
        return $this->_check;
    }

    function install() {
        $valid_params = $this->get_validparams();
        foreach($valid_params as $param) {
            xtc_db_query("ALTER TABLE " . TABLE_MANUFACTURERS . " ADD " . $param . " VARCHAR(255) NULL");
        }

        xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('" . $this->name . "_STATUS', 'true', 6, 1, 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
        xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('" . $this->name . "_APPENDTO_ADD_DESC', 'true', 6, 3, 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
        xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('" . $this->name . "_APPENDTO_LISTING_DESC', 'false', 6, 3, 'xtc_cfg_select_option(array(\'true\', \'false\'), ', now())");
        xtc_db_query("INSERT INTO " . TABLE_CONFIGURATION . " (configuration_key, configuration_value, configuration_group_id, sort_order, set_function, date_added) VALUES ('" . $this->name . "_VERSION', '" . $this->version . "', 6, 99, NULL, now())");
    }

    function remove() {
        $valid_params = $this->get_validparams();
        foreach($valid_params as $param) {
            xtc_db_query("ALTER TABLE " . TABLE_MANUFACTURERS . " DROP " . $param);
        }

        xtc_db_query("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key in ('" . implode("', '", $this->keys()) . "')");
        xtc_db_query("DELETE FROM " . TABLE_CONFIGURATION . " WHERE configuration_key LIKE '" . $this->name . "_%'");
    }

    function keys() {
        $key = array(
          $this->name . '_STATUS',
          $this->name . '_APPENDTO_ADD_DESC',
          $this->name . '_APPENDTO_LISTING_DESC',
        );
        return $key;
    }

    function get_validparams() {
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
        return $valid_params;
    }

}