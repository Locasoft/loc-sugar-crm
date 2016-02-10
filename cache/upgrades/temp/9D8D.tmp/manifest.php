<?php
/*********************************************************************************
 * SugarCRM is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2010 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * Contributor(s): www.synolia.com - sugar@synolia.com
 * You can contact SYNOLIA at 51 avenue Jean Jaures 69007 - LYON FRANCE
 * or at email address contact@synolia.com.
 ********************************************************************************/
 
// manifest file for information regarding application of new code
$manifest = array(

    // only install on the following sugar versions (if empty, no check)
    array (
        'exact_matches' => array (
        ),
        'regex_matches' => array (
            0 => '6\.5\.17'
        ),
    ),

    // Version for which this langpack can work
    'acceptable_sugar_flavors' => array (
        0 => 'CE',
    ),

    // Name of the Pack
    'name' => 'SYNOLIA - Traduction FR',

    'id'=> 'SYNOLIA_FR',

    'lang_file_suffix' => 'fr_FR',

    // Description of new code
    'description' => 'Traduction compatible pour les versions 6.5.x par SYNOLIA',

    // Author of new code
    'author' => 'Synolia.com',

    // Date published
    'published_date' => '2014/06/26',

    // Version of code
    'version' => '6517-140626',

    // Type of code (valid choices are: full, langpack, module, patch, theme )
    'type' => 'langpack',

    // Icon for displaying in UI (path to graphic contained within zip package)
    'icon' => '',

    // Uninstall is allowed 
    'is_uninstallable' => true,
);
