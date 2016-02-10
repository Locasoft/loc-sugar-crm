<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


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



$connector_strings = array (
    	'LBL_ID' => 'ID',
  'LBL_FAX' => 'Fax',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/rest/zoominfoperson/images/zoominfo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">ZoomInfo&#169; fournit de l&#39;information sur plus de 45 million de personnes travaillant dans plus de 5 millions de sociétés. En savoir plus.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',
  'LBL_SEARCH_FIELDS_INFO' => 'Les champs suivants sont supportés par l&#39; API de Zoominfo&#169 Person; : Prénom, Nom de famille et Adresse Email.',
	'LBL_EMAIL' => 'Adresse Email',
	'LBL_FIRST_NAME' => 'Prénom',
	'LBL_LAST_NAME' => 'Nom de Famille',
	'LBL_JOB_TITLE' => 'Titre',
	'LBL_IMAGE_URL' => 'URL Image',
	'LBL_SUMMARY_URL' => 'URL Résumé',
	'LBL_COMPANY_NAME' => 'Nom du Compte',
	'LBL_ZOOMPERSON_URL' => 'URL Zoominfo de la personne',
	'LBL_DIRECT_PHONE' => 'Téléphone direct',
	'LBL_COMPANY_PHONE' => 'Téléphone Société',
    'LBL_CURRENT_JOB_TITLE' => 'Titre du travail actuel',
    'LBL_CURRENT_JOB_START_DATE' => 'Date de début du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_NAME' => 'Société du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_STREET' => 'Rue de la société du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_CITY' => 'Ville de la société du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_STATE' => 'Etat de la société du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_ZIP' => 'Code postal de la société du travail actuel',
	'LBL_CURRENT_JOB_COMPANY_COUNTRY_CODE' => 'Pays de la société du travail actuel',
	'LBL_CURRENT_INDUSTRY' => 'Activité de la société du travail actuel',
	'LBL_BIOGRAPHY' => 'Biographiz',
	'LBL_EDUCATION_SCHOOL' => 'Ecole/Université',                       	
    'LBL_AFFILIATION_TITLE' => 'Titre du travail affilié',
    'LBL_AFFILIATION_COMPANY_PHONE' => 'Téléphone de la société d&#39;affiliation',
    'LBL_AFFILIATION_COMPANY_NAME' => 'Nom de la société d&#39;affiliation',
    'LBL_AFFILIATION_COMPANY_WEBSITE' => 'Site internet de la société d&#39;affiliation',

		'person_search_url' => 'URL pour la recherche des personnes',
    'person_detail_url' => 'URL pour la détail des personnes',
	'partner_code' => 'Code Partenaire',
  'api_key' => 'Clé API',
		'ERROR_LBL_CONNECTION_PROBLEM' => 'Erreur : Impossible de se connecter aux serveurs de Zoominfo - Connecteur sur les personnes.',
);

