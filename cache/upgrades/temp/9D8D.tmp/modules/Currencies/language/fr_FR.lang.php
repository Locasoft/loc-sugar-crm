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



$mod_strings = array (
	'LBL_ADD'												=> 'Ajouter',
  'LBL_ADMIN_ONLY' => 'Administrateurs seulement',
  'LBL_BELOW_MIN' => 'Le taux de conversion doit être supérieure à 0',
  'LBL_CREATED_BY' => 'Créé par',
  'LBL_CURRENCY' => 'Devise',
	'LBL_DELETE'											=> 'Supprimer',
  'LBL_EDIT_LAYOUT' => 'Editer la mise en page',
  'LBL_LIST_FORM_TITLE' => 'Liste des Devises',
  'LBL_LIST_ISO4217' => 'ISO 4217 Code',
	'LBL_LIST_ISO4217_HELP'									=> 'Veuillez entrer le code ISO 4217 à trois lettres qui définit le nom et le symbole de la monnaie.',
  'LBL_LIST_NAME' => 'Nom de la devise',
	'LBL_LIST_RATE'											=> 'Taux de conversion',
	'LBL_LIST_RATE_HELP'									=> 'Un taux de conversion de 0.5 pour Euro signifie que 10 US Dollars = 5 Euros.',
	'LBL_LIST_STATUS'										=> 'Statut',
  'LBL_LIST_SYMBOL' => 'Symbole de la devise',
  'LBL_MERGE' => 'Fusionner',
  'LBL_MERGE_TXT' => 'Merci de vérifier les devises que vous souhaitez affecter à la devise sélectionnée. Cela supprimera toutes les devises sélectionnées et réaffectera toute valeur associée à celle-ci à la devise sélectionnée.',
  'LBL_MODULE_NAME' => 'Devises',
  'LBL_MODULE_NAME_SINGULAR' => 'Devise',
  'LBL_UPDATE' => 'Enregistrer',
  'LBL_US_DOLLAR' => 'devise par défaut',
	'LNK_NEW_ACCOUNT'										=> 'Nouveau Compte',
	'LNK_NEW_CALL'											=> 'Planifier Appel',
  'LNK_NEW_CASE' => 'Nouveau Ticket',
  'LNK_NEW_CONTACT' => 'Nouveau Contact',
	'LNK_NEW_EMAIL'											=> 'Envoyer Email',
	'LNK_NEW_MEETING'										=> 'Planifier Réunion',
  'LNK_NEW_NOTE' => 'Créer Note',
  'LNK_NEW_OPPORTUNITY' => 'Nouvelle Affaire',
	'LNK_NEW_TASK'											=> 'Créer Tâche',
	'NTC_DELETE_CONFIRMATION'								=> 'Etes vous sûr de vouloir supprimer cette devise ? Il serait peut être préférable de passer son statut à "inactif" car tous les enregistrements utilisant cette devise seront convertis en devise par défaut quand ils seront consultés.',
  'currency_status_dom' => 
  array (
		'Active'		=> 'Actif',
    'Inactive' => 'Inactif',
	),
);
