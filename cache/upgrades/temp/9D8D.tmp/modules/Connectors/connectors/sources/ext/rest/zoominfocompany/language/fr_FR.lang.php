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
    	'LBL_COMPANY_ID' => 'ID',
  'LBL_DESCRIPTION' => 'Description',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="modules/Connectors/connectors/sources/ext/rest/zoominfocompany/images/zoominfo.gif" border="0"></td><td width="65%" valign="top" class="dataLabel">ZoomInfo&#169; fournit de l&#39;information sur plus de 45 million de personnes travaillant dans plus de 5 millions de sociétés. En savoir plus.  <a target="_blank" href="http://www.zoominfo.com/about">http://www.zoominfo.com/about</a></td></tr></table>',
  'LBL_SEARCH_FIELDS_INFO' => 'Les champs suivants sont supportés par l&#39; API de Zoominfo&#169 Company; : Nom du compte, Ville , Etat et Pays.',
	'LBL_COMPANY_NAME' => 'Nom du compte',
    'LBL_STREET' => 'Rue',
	'LBL_CITY' => 'Ville',
	'LBL_ZIP' => 'Code postal',
	'LBL_STATE' => 'Etat',
	'LBL_COUNTRY' => 'Pays',
	'LBL_INDUSTRY' => 'Activité',
	'LBL_WEBSITE' => 'Site Internet',
  'LBL_PHONE' => 'Téléphone',
	'LBL_COMPANY_TICKER' => 'Code société',
	'LBL_ZOOMINFO_COMPANY_URL' => 'URL du profil du compte',
	'LBL_REVENUE' => 'CA',
	'LBL_EMPLOYEES' => 'Nombre d&#39;employés',
		'company_search_url' => 'URL de recheche de compte',
	'company_detail_url' => 'URL pour le détail de compte',
    'partner_code' => 'Code partenaire',
  'api_key' => 'Clé API',
		'ERROR_LBL_CONNECTION_PROBLEM' => 'Erreur : Impossible de se connecter aux serveurs de Zoominfo - Connecteur sur les sociétés.',
);

