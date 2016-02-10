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




$connector_strings = array (
    
    'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel"><image src="' . getWebPath('modules/Connectors/connectors/sources/ext/soap/hoovers/images/hooversLogo.gif') . '" border="0"></td><td width="65%" valign="top" class="dataLabel">' .
                            'Hoovers&#169; fournit des données à jour gratuitement sur les sociétés pour les utilisateurs des produits SugarCRM. Pour avoir plus d\'information et de rapports sur les sociétés, et autres établissements aller sur <a href="http://www.hoovers.com" target="_blank">http://www.hoovers.com</a>.</td></tr></table>',    
    
        'LBL_SEARCH_FIELDS_INFO' => 'Les champs supportés par l&#39;API Hoovers sont : Nom de la société, Ville, Etat, Pays et Code postal.',
    
    	'LBL_ID' => 'ID',
	'LBL_NAME' => 'Nom de la société',
	'LBL_DUNS' => 'DUNS',
	'LBL_PARENT_DUNS' => 'DUNS Parent',	
	'LBL_STREET' => 'Adresse',
	'LBL_ADDRESS_STREET1' => 'Adresse Rue 1',
	'LBL_ADDRESS_STREET2' => 'Adresse Rue 2',	
	'LBL_CITY' => 'Ville',
	'LBL_STATE' => 'Etat',
	'LBL_COUNTRY' => 'Pays',
	'LBL_ZIP' => 'Code Postal',
	'LBL_FINSALES' => 'CA Annuel',
	'LBL_SALES' => 'CA Annuel',
	'LBL_HQPHONE' => 'Téléphone',
    	'LBL_TOTAL_EMPLOYEES' => 'Nombre Employés',
	'LBL_PRIMARY_URL' => 'Site Web',
	'LBL_DESCRIPTION' => 'Description',
	'LBL_SYNOPSIS' => 'Synopsis',	
	'LBL_LOCATION_TYPE' => 'Type de localisation',
	'LBL_COMPANY_TYPE' => 'Type de société',
	
	    	'ERROR_NULL_CLIENT' => 'Impossible de créer le client SOAP pour se connecter à Hoovers. Le service doit être indisponible ou votre licence à expiré ou bien vous avez atteint la limite du nombre de requête par jour autorisée.',
    	'ERROR_MISSING_SOAP_LIBRARIES' => 'Erreur : Impossible de charger la librairie SOAP (SoapClient, SoapHeader).',

		'hoovers_endpoint' => 'URL du Web Service',
	'hoovers_wsdl' => 'URL de la WSDL',
	'hoovers_api_key' => 'Clé API',
);
