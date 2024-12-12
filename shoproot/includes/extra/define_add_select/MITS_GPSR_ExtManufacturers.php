<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSR_ExtManufacturers.php
 * Date: 11.12.2024
 * Time: 19:39
 *
 * Author: Hetfield
 * Copyright: (c) 2024 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_STATUS') && MODULE_MITS_GPSREXTMANUFACTURERS_STATUS == 'true') {
    $add_select_product[] = $add_select_search[] = $add_select_default[] = 'pd.products_prodsg_info';
}
