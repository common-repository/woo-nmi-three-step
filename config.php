<?php

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if ( !class_exists('Config')) {
    class Config {
        public static $projectType          = 'nmi';
        public static $pluginId             = 'nmi_gateway';
        public static $pluginIcon           = null;
        public static $pluginHasFields      = false;
        public static $pluginMethodTitle    = 'NMI Gateway For WooCommerce';
        public static $pluginDescription    = 'NMI Gateway aids customers to make secure payments using Network Merchants, Inc.';
        public static $pluginButtonText     = 'Pay Securely';
        public static $pluginUrl            = 'https://secure.networkmerchants.com/api/v2/three-step';
    }
}
?>