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













if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');




















$defaultText = 
<<<EOQ
<div style="padding-left:5px;">
Bienvenue dans <a href="http://www.sugarcrm.com">Sugar</a> 

Nouvelles fonctionnalités:<br /><br />
* Equipes dynamiques / Multi-équipes (PRO et ENT)<br />
* Amélioration de la gestion des mots de passe<br />
* Ajout de l'éditeur de Vue Mobile (PRO et ENT)<br />
* Amélioration de la gestion des emails<br />

Pour plus d'informations rendez vous sur <a href="http://www.sugarcrm.com/crm/university">Sugar University</a> (en anglais) <br />
</div>
EOQ
;


$dashletStrings['JotPadDashlet'] = array('LBL_TITLE'            => 'Bloc Note',
                                         'LBL_DESCRIPTION'      => 'Un dashlet pour conserver vos notes',
                                         'LBL_SAVING'           => 'Sauvegarde du Bloc Note ...',
                                         'LBL_SAVED'            => 'Sauvegarder',
                                         'LBL_CONFIGURE_TITLE'  => 'Titre',
                                         'LBL_CONFIGURE_HEIGHT' => 'Auteur (1 - 300)',
                                         'LBL_DBLCLICK_HELP'    => 'Double cliquez pour éditer.',
                                         'LBL_DEFAULT_TEXT'     => $defaultText,
);
?>