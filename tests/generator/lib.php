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
 * mod_pokcertificate data generator.
 *
 * @package    mod_pokcertificate
 * @category   test
 * @copyright  2024 Moodle India Information Solutions Pvt Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

use mod_pokcertificate\pok;

/**
 * mod_pokcertificate data generator class.
 *
 * @package    mod_pokcertificate
 * @copyright  2024 Moodle India Information Solutions Pvt Ltd
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
class mod_pokcertificate_generator extends testing_module_generator {

    /**
     * create_instance
     *
     * @param  mixed $record
     * @param  mixed $options
     * @return [object]
     */
    public function create_instance($record = null, array $options = null) {
        global $CFG, $USER, $SITE;
        require_once($CFG->libdir . '/resourcelib.php');
        if (!isset($CFG->institution)) {    // To catch the first time.
            set_config('institution', 'Shyam QA');
        }
        if (!isset($CFG->orgid)) {    // To catch the first time.
            set_config('orgid', '123456789');
        }
        $record = (object)(array)$record;

        $displayoptions = [];
        if (!isset($record->printintro)) {
            $record->printintro = 0;
        }
        if (!isset($record->printlastmodified)) {
            $record->printlastmodified = 1;
        }
        $displayoptions['printintro']   = $record->printintro;
        $displayoptions['printlastmodified'] = $record->printlastmodified;

        if (!isset($record->printlastmodified)) {
            $record->course = $SITE->id;
        } else {
            $record->course = $record->course->id;
        }
        $record->name = 'Sample Certificate';
        $record->intro = 'This is a sample certificate';
        $record->introformat = FORMAT_HTML;
        $record->title = 'Sample Certificate';
        $record->orgname = get_config('mod_pokcertificate', 'institution');
        $record->orgid = get_config('mod_pokcertificate', 'orgid');
        $record->templateid = 0;
        $record->displayoptions = serialize($displayoptions);
        $record->usercreated = $USER->id;
        $record->timecreated = time();

        $instance  = parent::create_instance($record, (array)$options);

        return $instance;
    }


    /**
     * create_pok_template
     *
     * @param  mixed $cm
     * @return [object]
     */
    public function create_pok_template($cm = null) {

        $templateinfo = new \stdclass;
        $templateinfo->template = 'Artistic';
        $templateinfo->templatetype = 0;

        $data = pok::save_template_definition($templateinfo, $cm);

        return $data;
    }

    public function get_fieldmapping_data($cmid, $certid, $tempname, $tempid) {
        $data = new stdClass();
        $data->option_repeats = 3;
        $data->fieldmapping =  [0 => 1, 1 => 2, 2 => 3];
        $data->templatefield = [0 => 'param1', 1 => 'param2', 2 => 'paramN'];
        $data->userfield = [0 => 'id', 1 => 'country', 2 => 'address'];
        $data->optionid = [0 => 0, 1 => 0, 2 => 0];
        $data->id = $cmid;
        $data->temp = $tempname;
        $data->tempid = $tempid;
        $data->certid = $certid;
        return $data;
    }

    function set_pokcertificate_settings() {
        set_config('wallet', '0x8cd7c619a1685a1f6e991946af6295ca05210af7', 'mod_pokcertificate');
    }
}
