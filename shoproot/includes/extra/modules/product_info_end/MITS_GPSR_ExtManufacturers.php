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

    foreach ($valid_params as $param) {
        $info_smarty->assign(strtoupper($param), isset($manufacturer[$param]) && !empty($manufacturer[$param]) ? $manufacturer[$param] : '');
    }

    if (defined('MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_ADD_DESC') && MODULE_MITS_GPSREXTMANUFACTURERS_APPENDTO_ADD_DESC == 'true'
      && (
        !empty($manufacturer['mits_gpsr_manufacturer_name'])
        || !empty($manufacturer['mits_gpsr_manufacturer_person'])
        || !empty($manufacturer['mits_gpsr_manufacturer_additional_info_1'])
        || !empty($manufacturer['mits_gpsr_manufacturer_additional_info_2'])
        || !empty($manufacturer['mits_gpsr_manufacturer_additional_info_3'])
        || !empty($manufacturer['mits_gpsr_responsibleperson_name'])
        || !empty($manufacturer['mits_gpsr_responsibleperson_person'])
      )
    ) {
        $mits_gpsr_text = '<div class="mits-gpsr-content" data-nosnippet>';

        $mits_gpsr_text .= '<div class="gpsr-infos-heading">' . MITS_GSPR_INFOHEADING . '</div>';
        $mits_gpsr_text .= '<div class="gpsr-infos">';

        if (!empty($manufacturer['mits_gpsr_manufacturer_name']) || !empty($manufacturer['mits_gpsr_manufacturer_person'])) {
            $mits_gpsr_text .= '<div class="gpsr_manufacturer"><div class="gpsr_manufacturer_inner">';
            $mits_gpsr_text .= '<div class="gpsr_heading">' . MITS_GSPR_MANUFACTURER_HEADING . '</div>';
            if (!empty($manufacturer['mits_gpsr_manufacturer_name'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_manufacturer_name'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_person'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_manufacturer_person'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_street'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_manufacturer_street'];
                if (!empty($manufacturer['mits_gpsr_manufacturer_housenumber'])) {
                    $mits_gpsr_text .= ' ' . $manufacturer['mits_gpsr_manufacturer_housenumber'];
                }
                $mits_gpsr_text .= '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_city'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">';
                if (!empty($manufacturer['mits_gpsr_manufacturer_postalcode'])) {
                    $mits_gpsr_text .= $manufacturer['mits_gpsr_manufacturer_postalcode'] . ' ';
                }
                $mits_gpsr_text .= $manufacturer['mits_gpsr_manufacturer_city'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_state'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_manufacturer_state'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_country'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_manufacturer_country'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_homepage'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_HOMEPAGE . $manufacturer['mits_gpsr_manufacturer_homepage'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_email'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_MAIL . $manufacturer['mits_gpsr_manufacturer_email'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_phone_number_1'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_PHONE . $manufacturer['mits_gpsr_manufacturer_phone_number_1'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_phone_number_2'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_PHONE2 . $manufacturer['mits_gpsr_manufacturer_phone_number_2'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_manufacturer_fax_number'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_FAX . $manufacturer['mits_gpsr_manufacturer_fax_number'] . '</div>';
            }
            $mits_gpsr_text .= '</div></div>';
        }

        if (!empty($manufacturer['mits_gpsr_responsibleperson_name']) || !empty($manufacturer['mits_gpsr_responsibleperson_person'])) {
            $mits_gpsr_text .= '<div class="gpsr_responsibleperson"><div class="gpsr_responsibleperson_inner">';
            $mits_gpsr_text .= '<div class="gpsr_heading">' . MITS_GSPR_RESPONSIBLEPERSON_HEADING . '</div>';
            if (!empty($manufacturer['mits_gpsr_responsibleperson_name'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_responsibleperson_name'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_person'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_responsibleperson_person'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_street'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_responsibleperson_street'];
                if (!empty($manufacturer['mits_gpsr_responsibleperson_housenumber'])) {
                    $mits_gpsr_text .= ' ' . $manufacturer['mits_gpsr_responsibleperson_housenumber'];
                }
                $mits_gpsr_text .= '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_city'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">';
                if (!empty($manufacturer['mits_gpsr_responsibleperson_postalcode'])) {
                    $mits_gpsr_text .= $manufacturer['mits_gpsr_responsibleperson_postalcode'] . ' ';
                }
                $mits_gpsr_text .= $manufacturer['mits_gpsr_responsibleperson_city'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_state'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_responsibleperson_state'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_country'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . $manufacturer['mits_gpsr_responsibleperson_country'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_homepage'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_HOMEPAGE . $manufacturer['mits_gpsr_responsibleperson_homepage'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_email'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_MAIL . $manufacturer['mits_gpsr_responsibleperson_email'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_phone_number_1'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_PHONE . $manufacturer['mits_gpsr_responsibleperson_phone_number_1'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_phone_number_2'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_PHONE2 . $manufacturer['mits_gpsr_responsibleperson_phone_number_2'] . '</div>';
            }
            if (!empty($manufacturer['mits_gpsr_responsibleperson_fax_number'])) {
                $mits_gpsr_text .= '<div class="gspr-address-row">' . MITS_GSPR_FAX . $manufacturer['mits_gpsr_responsibleperson_fax_number'] . '</div>';
            }
            $mits_gpsr_text .= '</div></div>';
        }

        $mits_gpsr_text .= '</div>';

        if (!empty($manufacturer['mits_gpsr_manufacturer_additional_info_1'])) {
            $mits_gpsr_text .= '<div class="gspr-additional">' . $manufacturer['mits_gpsr_manufacturer_additional_info_1'] . '</div>';
        }
        if (!empty($manufacturer['mits_gpsr_manufacturer_additional_info_2'])) {
            $mits_gpsr_text .= '<div class="gspr-additional">' . $manufacturer['mits_gpsr_manufacturer_additional_info_2'] . '</div>';
        }
        if (!empty($manufacturer['mits_gpsr_manufacturer_additional_info_3'])) {
            $mits_gpsr_text .= '<div class="gspr-additional">' . $manufacturer['mits_gpsr_manufacturer_additional_info_3'] . '</div>';
        }

        $mits_gpsr_text .= '</div>';

        $mits_gpsr_text .= '<style>.mits-gpsr-content{padding:4px;background:#fafafa}.gpsr-infos-heading{font-weight:bold;font-size:14px;border-bottom:1px solid #888;padding:10px}.gpsr-infos{display:flex;flex-wrap:wrap}.gpsr_manufacturer,.gpsr_responsibleperson{flex-basis: 50%;flex-grow:1;flex-shrink:1}.gpsr_manufacturer_inner,.gpsr_responsibleperson_inner{padding:10px}.gpsr_heading {font-weight:bold;font-size:13px;border-bottom:1px solid #999}.gspr-address-row{font-weight:normal;font-size:12px}.gspr-additional{padding:10px}</style>';

        $info_smarty->assign('MANUFACTURER_ADD_DESCRIPTION', ($manufacturer['manufacturers_add_description'] ?? '') . $mits_gpsr_text);
    }
}