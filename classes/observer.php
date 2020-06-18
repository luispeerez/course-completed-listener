<?php
/**
 * This plugin for Moodle is used to send emails through a web form.
 *
 * @package    local_course_completion_listener
 * @author     Luis Perez Bautista
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

class local_course_completion_listener_observer {
    public function __construct() {
        error_log("in construct");
        echo "hola desde plugin";
    }

    /**
     * Triggered when 'course_module_completion_updated' event is triggered.
     *
     * @param \core\event\course_module_completion_updated $event
     */
    public static function on_activity_updated(\core\event\course_module_completion_updated $event) {
        global $DB, $CFG;

        error_log("activity completed from plugin");
    }
     
}