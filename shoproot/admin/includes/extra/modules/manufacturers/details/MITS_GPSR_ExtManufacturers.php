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

if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_STATUS') && MODULE_MITS_GPSREXTMANUFACTURERS_STATUS == 'true') {
    $valid_params_1 = array(
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
    );
    $valid_params_2 = array(
      'mits_gpsr_manufacturer_additional_info_1',
      'mits_gpsr_manufacturer_additional_info_2',
      'mits_gpsr_manufacturer_additional_info_3',
    );
    $valid_params_3 = array(
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
    ?>
  <div id="mit_extmanu_div" style="clear:both; margin:20px auto; box-shadow: 0 0 5px 0 #ccc; background: #ffe; padding-top: 10px;">
    <h3 class="div_header" style="clear:both; margin:5px;"><?php echo MITS_GPSR_MANUFACTURER_HEADING_TITLE; ?></h3>
    <div style="float: left; width: 49%; margin-right: 1%; vertical-align: top;">
      <div class="main div_header"><?php
          echo MITS_GPSR_MANUFACTURER_TITLE; ?></div>
      <table class="tableInput border0">
          <?php
          foreach ($valid_params_1 as $param1) {
              ?>
            <tr>
              <td class="main" style="width:160px;"><?php echo constant(strtoupper($param1) . '_TITLE'); ?></td>
              <td class="main"><?php
                  echo xtc_draw_input_field($param1, ((isset($manufact[$param1])) ? $manufact[$param1] : ''), 'style="width:100%" maxlength="255"'); ?></td>
            </tr>
              <?php
          }
          ?>
      </table>
    </div>
    <div style="float: left; width: 49%; margin-left: 1%; vertical-align: top;">
      <div class="main div_header"><?php
          echo MITS_GPSR_RESPONSIBLEPERSON_TITLE; ?></div>
      <table class="tableInput border0">
          <?php
          foreach ($valid_params_3 as $param3) {
              ?>
            <tr>
              <td class="main" style="width:160px;"><?php echo constant(strtoupper($param3) . '_TITLE'); ?></td>
              <td class="main"><?php
                  echo xtc_draw_input_field($param3, ((isset($manufact[$param3])) ? $manufact[$param3] : ''), 'style="width:100%" maxlength="255"'); ?></td>
            </tr>
              <?php
          }
          ?>
      </table>
    </div>
    <div sytel="clear:both;height:20px;"></div>
    <div style="float: none; clear: left; margin: 20px auto; width: 100%; vertical-align:top; padding-top: 10px;">
      <div class="main div_header"><?php
          echo MITS_GPSR_MANUFACTURER_ADDITIONAL_TITLE; ?></div>
      <table class="tableInput border0">
          <?php
          foreach ($valid_params_2 as $param2) {
              ?>
            <tr>
              <td class="main" style="width:160px;"><?php echo constant(strtoupper($param2) . '_TITLE'); ?></td>
              <td class="main"><?php
                  echo xtc_draw_input_field($param2, ((isset($manufact[$param2])) ? $manufact[$param2] : ''), 'style="width:100%" maxlength="255"'); ?></td>
            </tr>
              <?php
          }
          ?>
      </table>
    </div>
  </div>
    <style>
      #mit_extmanu_div .tableInput {
        background: #ffe;
        border-top: 1px solid #6a9;
      }
      #mit_extmanu_div .tableInput td {
        background: #ffe;
        border-bottom: 1px solid #6a9;
      }
    </style>
    <?php
}