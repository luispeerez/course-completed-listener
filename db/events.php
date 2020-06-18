<?php
/**
 *
 * The observers defined in this file are notified when respective events are triggered. All plugins
 * support this.
 *
 * For more information, take a look to the documentation available:
 *     - Events API: {@link http://docs.moodle.org/dev/Event_2}
 *     - Upgrade API: {@link http://docs.moodle.org/dev/Upgrade_API}
 *
 */

defined('MOODLE_INTERNAL') || die();


// List of events_2 observers.

$observers = array(

    array(
        'eventname'   => '\core\event\course_module_completion_updated',
        'callback'    => 'local_course_completion_listener_observer::on_activity_updated',
    ),
);

// List of all events triggered by Moodle can be found using Events list report.
