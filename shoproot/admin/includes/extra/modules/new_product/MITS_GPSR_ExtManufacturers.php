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
	  $db_version_check = array('plain' => '2.0.0.0');
    if (is_file(DIR_FS_INC.'get_database_version.inc.php')) {
        require_once (DIR_FS_INC.'get_database_version.inc.php');
        $db_version_check = get_database_version();
    }

    if (version_compare($db_version_check['plain'], '2.0.7.0', '<')) {
        if ($_POST) {
            $products_prodsg_info = $_POST['products_prodsg_info'];
        }
        if (isset($_GET['pID'])) {
            $products_desc_fields = $catfunc->get_products_desc_fields($pInfo->products_id, $languages[$i]['id']);
        } else {
            $products_desc_fields = $product_description_array;
        }
				for ($i = 0, $n = sizeof($languages); $i < $n; $i++) {
						echo xtc_wysiwyg('products_prodsg_info', $data['code'], $languages[$i]['id']);
						$lng_image = xtc_image(DIR_WS_LANGUAGES . $languages[$i]['directory'] .'/admin/images/'. $languages[$i]['image'], $languages[$i]['name']);
						?>
						<div id="mits_prodsg_info_<?php echo $i;?>" class="main" style="padding: 3px; line-height:20px;">
								<b><?php
										echo $lng_image . '&nbsp;' . constant('MITS_GPSR_PRODUCT_SECURITY_TITLE'); ?></b><br />
								<?php
								echo xtc_draw_textarea_field(
									'products_prodsg_info[' . $languages[$i]['id'] . ']',
									'soft',
									'103',
									'30',
									(isset($products_prodsg_info[$languages[$i]['id']]) ? stripslashes($products_prodsg_info[$languages[$i]['id']]) : $products_desc_fields['products_prodsg_info'])
								); ?>
						</div>
						<script>
							$(document).ready(function () {
								$("#mits_prodsg_info_<?php echo $i;?>").appendTo("#tab_lang_<?php echo $i;?>");
							});
						</script>
						<?php
				}
		}
}