<?php
/**
 * --------------------------------------------------------------
 * File: MITS_GPSR_ExtManufacturers.php
 * Date: 11.12.2024
 * Time: 19:22
 *
 * Author: Hetfield
 * Copyright: (c) 2024 - MerZ IT-SerVice
 * Web: https://www.merz-it-service.de
 * Contact: info@merz-it-service.de
 * --------------------------------------------------------------
 */

defined( '_VALID_XTC' ) or die( 'Direct Access to this location is not allowed.' );

if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_STATUS') && MODULE_MITS_GPSREXTMANUFACTURERS_STATUS == 'true') {
    if ($_POST) {
        $products_prodsg_info = $_POST['products_prodsg_info'];
    }
    echo xtc_wysiwyg('products_prodsg_info', $data['code'], $languages[$i]['id']);
    ?>
    <div id="mits_prodsg_info" class="main" style="padding: 3px; line-height:20px;">
        <b><?php
            echo $lng_image . '&nbsp;' . constant('MITS_GPSR_PRODUCT_SECURITY_TITLE'); ?></b><br />
        <?php
        echo xtc_draw_textarea_field(
          'products_prodsg_info[' . $languages[$i]['id'] . ']',
          'soft',
          '103',
          '30',
          (isset($_POST['products_prodsg_info'][$languages[$i]['id']]) ? stripslashes($_POST['products_prodsg_info'][$languages[$i]['id']]) : $products_desc_fields['products_prodsg_info'])
        ); ?>
    </div>
    <?php
}