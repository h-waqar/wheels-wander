<?php
/*
 * Plugin Name:             Wheels Wander
 * Description:             Wordpress plugin to book custom rides.
 * Version:                 1.0.5
 * Text Domain:             cs-wheels-wander
 * License:                 GPL-2.0+
 * License URI:             https://www.gnu.org/licenses/gpl-2.0.txt
 */

if (!defined("ABSPATH")) {
    exit();
}

define("CS_WHEELS_WANDER_CURRENCY", "€");

use CsWheelsWander\Includes\CsAjaxHandle;

require_once __DIR__ . "/vendor/autoload.php";

if (!class_exists("CsWheelsWander")) :
    class CsWheelsWander
    {
        public static $_instance;
        public static $ajaxHandle;

        public function __construct()
        {
            self::$ajaxHandle = CsAjaxHandle::instance();
            $this->init();
        }

        public static function instance()
        {
            if (is_null(self::$_instance)) {
                self::$_instance = new self();
            }

            return self::$_instance;
        }

        public function init()
        {
            add_shortcode("cs_wheels_wander", [$this, "cs_wheels_wander"]);
            add_action('wp_enqueue_scripts', [$this, 'cs_enqueue_scripts']);
            add_action("wp_enqueue_scripts", [$this, 'cs_enqueue_css']);
        }

        public function cs_wheels_wander()
        {
            ob_start();
            require_once "templates/template-car-booking.php";
            return ob_get_clean();
        }


       public function cs_enqueue_css()
{
    // Enqueue Bootstrap CSS
    wp_enqueue_style('bootstrap', 'https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css', array(), '5.3.3');
    
    // Enqueue Booking Car Custom CSS
    wp_register_style("cs-booking-car", CS_WHEELS_WANDER_BASE_URL . "/css/booking-car.css", null, CS_WHEELS_WANDER_VER);
    wp_enqueue_style("cs-booking-car");

    // Enqueue jQuery UI CSS for Datepicker
    wp_enqueue_style('jquery-ui', 'https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css', array(), '1.13.2');
}

public function cs_enqueue_scripts()
{
    // Enqueue jQuery (default in WordPress)
    wp_enqueue_script('jquery');

    // Enqueue jQuery UI JS for Datepicker
    wp_enqueue_script('jquery-ui-datepicker', 'https://code.jquery.com/ui/1.13.2/jquery-ui.min.js', array('jquery'), '1.13.2', true);

    // Enqueue custom scripts
    wp_enqueue_script('booking-script', CS_WHEELS_WANDER_BASE_URL . '/js/booking-script.js', array('jquery'), CS_WHEELS_WANDER_VER, true);
    wp_enqueue_script('WheelsWander', CS_WHEELS_WANDER_BASE_URL . '/js/WheelsWander.js', array('jquery'), CS_WHEELS_WANDER_VER, true);
    wp_enqueue_script('wwSummary', CS_WHEELS_WANDER_BASE_URL . '/js/wwSummary.js', array('jquery'), CS_WHEELS_WANDER_VER, true);

    // Localize script for AJAX URL
    wp_localize_script("booking-script", "ajax_object", ["ajax_url" => admin_url("admin-ajax.php")]);
}

        public function activate()
        {

            global $wpdb;
            $table_name = $wpdb->prefix . 'car_bookings';

            $charset_collate = $wpdb->get_charset_collate();

            $sql = "CREATE TABLE $table_name (
                id INT(11) NOT NULL AUTO_INCREMENT,
                date DATE NOT NULL,
                booked_cars INT(11) NOT NULL,
                post_id INT(11) NOT NULL,
                PRIMARY KEY (id)
            ) $charset_collate;";

            require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
            dbDelta($sql);
        }

        public function deactivate()
        {
        }
    }

    define("CS_WHEELS_WANDER_VER", "2.9");
    // define("CS_WHEELS_WANDER_VER", time()); // cache buster
    define("CS_WHEELS_WANDER_DIR_PATH", plugin_dir_path(__FILE__));
    define("CS_WHEELS_WANDER_BASE_URL", plugin_dir_url(__FILE__));
endif;

$GLOBALS["cs_wheels"] = CsWheelsWander::instance();
CsWheelsWander::$ajaxHandle->register();

register_activation_hook(__FILE__, [$GLOBALS["cs_wheels"], "activate"]);
register_deactivation_hook(__FILE__, [$GLOBALS["cs_wheels"], "deactivate"]);



function print_all_car_bookings() {
    global $wpdb;

    $table_name = $wpdb->prefix . 'car_bookings';

    // Fetch all rows from the table
    $results = $wpdb->get_results("SELECT * FROM $table_name", ARRAY_A);

    if (empty($results)) {
        echo '<p>No bookings found.</p>';
        return;
    }

    // Print in a simple HTML table
    echo '<table border="1" cellpadding="10" cellspacing="0">';
    echo '<tr><th>ID</th><th>Date</th><th>Booked Cars</th><th>Post ID</th></tr>';

    foreach ($results as $row) {
        echo '<tr>';
        echo '<td>' . esc_html($row['id']) . '</td>';
        echo '<td>' . esc_html($row['date']) . '</td>';
        echo '<td>' . esc_html($row['booked_cars']) . '</td>';
        echo '<td>' . esc_html($row['post_id']) . '</td>';
        echo '</tr>';
    }

    echo '</table>';
}


add_shortcode('show_car_bookings', 'print_all_car_bookings');
