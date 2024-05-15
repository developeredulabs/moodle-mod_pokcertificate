<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * index to view incomplete student profile.
 *
 * @package   mod_pokcertificate
 * @copyright 2024 Moodle India Information Solutions Pvt Ltd
 * @author    2024 Narendra.Patel <narendra.patel@moodle.com>
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot . '/mod/pokcertificate/classes/form/searchfilter_form.php');
require_login();

$context = \context_system::instance();
$url = new moodle_url('/mod/pokcertificate/incompletestudent.php', []);
$heading = get_string('incompletestudent', 'mod_pokcertificate');
$PAGE->set_url($url);
$PAGE->set_context($context);
$PAGE->set_heading($heading);
$PAGE->set_title($heading);
$studentid = optional_param('studentid', '', PARAM_RAW);


echo $OUTPUT->header();
$renderer = $PAGE->get_renderer('mod_pokcertificate');
echo $renderer->userbulkupload();
$mform = new \searchfilter_form();
$mform->set_data(['studentid' => $studentid]);
if ($mform->is_cancelled()) {
    redirect(new \moodle_url('/mod/pokcertificate/incompletestudent.php'));
} else if ($userdata = $mform->get_data()) {

    redirect(new \moodle_url('/mod/pokcertificate/incompletestudent.php', ['studentid' => $userdata->studentid,]));
} else {
    $mform->display();
}
$records = $renderer->get_incompletestudentprofile();
echo $records['recordlist'];
echo $records['pagination'];
echo $OUTPUT->footer();
