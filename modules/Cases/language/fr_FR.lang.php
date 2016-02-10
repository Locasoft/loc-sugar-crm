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
	'ERR_DELETE_RECORD'										=> 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
	'LBL_ACCOUNT_ID'										=> 'Compte (ID)',
	'LBL_ACCOUNT_NAME'										=> 'Nom du Compte:',
  'LBL_ACCOUNT_NAME_MOD' => 'Compte (Mod)',
  'LBL_ACCOUNT_NAME_OWNER' => 'Compte (Responsable)',
	'LBL_ACTIVITIES_SUBPANEL_TITLE'							=> 'Activités à Réaliser',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_ASSIGNED_USER_NAME_MOD' => 'Assigné à (Mod)',
  'LBL_ASSIGNED_USER_NAME_OWNER' => 'Assigné à (Responsable)',
	'LBL_ATTACH_NOTE'										=> 'Attacher une note',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASE' => 'Ticket:',
  'LBL_CASE_INFORMATION' => 'Informations Tickets',
	'LBL_CASE_NUMBER'										=> 'Numéro du Ticket:',
	'LBL_CASE_SUBJECT'										=> 'Sujet du Ticket:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
	'LBL_CONTACT_CASE_TITLE'								=> 'Contact-Ticket:',
  'LBL_CONTACT_HISTORY_SUBPANEL_TITLE' => 'Historique des emails des contacts liés',
	'LBL_CONTACT_NAME'										=> 'Nom du Contact:',
	'LBL_CONTACT_ROLE'										=> 'Rôle:',
  'LBL_CREATED_BY_NAME_MOD' => 'Créé par (Mod)',
  'LBL_CREATED_BY_NAME_OWNER' => 'Créé par (Responsable)',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_CREATE_KB_DOCUMENT' => 'Créer un article',
	'LBL_DEFAULT_SUBPANEL_TITLE'							=> 'Tickets',
  'LBL_DESCRIPTION' => 'Description:',
  'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
  'LBL_EXPORT_ASSIGNED_USER_ID' => 'Assigné à (ID)',
  'LBL_EXPORT_ASSIGNED_USER_NAME' => 'Assigné à',
  'LBL_EXPORT_CREATED_BY' => 'Créé par (ID)',
  'LBL_EXPORT_CREATED_BY_NAME' => 'Créé par',
  'LBL_EXPORT_MODIFIED_USER_ID' => 'Modifié par (ID)',
  'LBL_EXPORT_TEAM_COUNT' => 'Nb. équipes',
	'LBL_FILENANE_ATTACHMENT'								=> 'Attachement de fichier',
	'LBL_HISTORY_SUBPANEL_TITLE'							=> 'Historique et Activités terminées',
  'LBL_INVITEE' => 'Contacts',
  'LBL_KBDOCUMENTS_SUBPANEL_TITLE' => 'Base de connaissances',
  'LBL_LIST_ACCOUNT_NAME' => 'Nom Compte',
  'LBL_LIST_ASSIGNED' => 'Assigné à',
  'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigné à',
  'LBL_LIST_CLOSE' => 'Fermer',
  'LBL_LIST_DATE_CREATED' => 'Date de création',
  'LBL_LIST_FORM_TITLE' => 'Liste des Tickets',
  'LBL_LIST_LAST_MODIFIED' => 'Date de modification',
  'LBL_LIST_MY_CASES' => 'Mes Tickets ouverts',
  'LBL_LIST_NUMBER' => 'Num.',
  'LBL_LIST_PRIORITY' => 'Priorité',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBJECT' => 'Sujet',
	'LBL_MEMBER_OF'											=> 'Compte',
  'LBL_MODIFIED_BY_NAME_MOD' => 'Modifié par (Mod)',
  'LBL_MODIFIED_BY_NAME_OWNER' => 'Modifié par (Responsable)',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODIFIED_USER_NAME' => 'Modifié par',
  'LBL_MODIFIED_USER_NAME_MOD' => 'Modifié par (Mod)',
  'LBL_MODIFIED_USER_NAME_OWNER' => 'Modifié par (Responsable)',
	'LBL_MODULE_NAME'										=> 'Tickets',
  'LBL_MODULE_NAME_SINGULAR' => 'Ticket',
	'LBL_MODULE_TITLE'										=> 'Tickets',
	'LBL_NEW_FORM_TITLE'									=> 'Nouveau Ticket',
	'LBL_NUMBER'											=> 'Numéro:',
  'LBL_PORTAL_VIEWABLE' => 'Visible sur le portail',
	'LBL_PRIORITY'											=> 'Priorité:',
	'LBL_PROJECTS_SUBPANEL_TITLE'							=> 'Projets',
  'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
	'LBL_RESOLUTION'										=> 'Etat:',
	'LBL_SEARCH_FORM_TITLE'									=> 'Rechercher un Ticket',
  'LBL_SHOW_IN_PORTAL' => 'Voir dans le portail',
  'LBL_SHOW_MORE' => 'Voir plus de ticket',
	'LBL_STATUS'											=> 'Statut:',
	'LBL_SUBJECT'											=> 'Sujet:',
	'LBL_SYSTEM_ID'											=> 'ID',
  'LBL_TEAM_COUNT_MOD' => 'Nb; équipes (Mod)',
  'LBL_TEAM_COUNT_OWNER' => 'Nb; équipes (Reponsable)',
  'LBL_TEAM_NAME_MOD' => 'Equipe principale (Mod)',
  'LBL_TEAM_NAME_OWNER' => 'Equipe principale (Responsable)',
  'LBL_TYPE' => 'Type',
  'LBL_WORK_LOG' => 'Log de travail',
	'LNK_CASE_LIST'											=> 'Tickets',
  'LNK_CASE_REPORTS' => 'Rapports de Tickets',
  'LNK_CREATE' => 'Créé Ticket',
  'LNK_CREATE_WHEN_EMPTY' => 'Créer un Ticket maintenant.',
  'LNK_IMPORT_CASES' => 'Import Tickets',
	'LNK_NEW_CASE'											=> 'Créer Ticket',
	'NTC_REMOVE_FROM_BUG_CONFIRMATION'						=> 'Etes-vous sûr(e) de vouloir supprimer ce ticket du Bug identifié ?',
	'NTC_REMOVE_INVITEE'									=> 'Etes-vous sûr(e) de vouloir supprimer ce contact du ticket ?',
);

