<?php
// This file is part of the Moodle-PlugIn "Coursefeedback" - http://moodle.org/
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
 * Coursefeedback block caps.
 *
 * @package    block_coursefeedback
 * @copyright  2012 onwards Jan Eberhardt  {@link https://www.innocampus.tu-berlin.de/}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$capabilities = array(

    'block/coursefeedback:managefeedbacks' => array(

    	'riskbitmask' => RISK_XSS,
    		
        'captype' => 'write',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            	'manager'        => CAP_ALLOW,
        		'coursecreator'  => CAP_PREVENT,
        		'teacher'        => CAP_PROHIBIT,
        		'editingteacher' => CAP_PROHIBIT,
        		'student'        => CAP_PROHIBIT,
        		'guest'          => CAP_PROHIBIT
        )
    ),

    'block/coursefeedback:viewanswers' => array(

        'captype' => 'read',
        'contextlevel' => CONTEXT_BLOCK,
        'archetypes' => array(
            	'manager'        => CAP_ALLOW,
        		'coursecreator'  => CAP_ALLOW,
        		'teacher'        => CAP_ALLOW,
        		'editingteacher' => CAP_ALLOW,
        		'student'        => CAP_PROHIBIT,
        		'guest'          => CAP_PROHIBIT
        )
    ),
		
	'block/coursefeedback:download' => array(
	
			'captype' => 'read',
			'contextlevel' => CONTEXT_BLOCK,
			'archetypes' => array(
					'manager'        => CAP_ALLOW,
					'coursecreator'  => CAP_ALLOW,
					'editingteacher' => CAP_ALLOW,
					'teacher'        => CAP_PREVENT,
					'student'        => CAP_PREVENT,
					'guest'          => CAP_PREVENT
			)
	),
		
	'block/coursefeedback:evaluate' => array(
	
			'captype' => 'write',
			'contextlevel' => CONTEXT_BLOCK,
			'archetypes' => array(
            	'manager'        => CAP_ALLOW,
        		'coursecreator'  => CAP_PREVENT,
        		'teacher'        => CAP_PREVENT,
        		'editingteacher' => CAP_PREVENT,
        		'student'        => CAP_ALLOW,
        		'guest'          => CAP_PREVENT
			)
	)

);

