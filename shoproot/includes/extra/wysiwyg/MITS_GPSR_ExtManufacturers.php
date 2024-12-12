<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSR_ExtManufacturers.php
 * Date: 11.12.2024
 * Time: 19:38
 *
 * Author: Hetfield
 * Copyright: (c) 2024 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_STATUS') && MODULE_MITS_GPSREXTMANUFACTURERS_STATUS == 'true') {
    switch ($type) {
        case 'products_prodsg_info':
            $editorName = 'products_prodsg_info_' . $language_id;
            $default_editor_height = 200;
            break;
    }
}