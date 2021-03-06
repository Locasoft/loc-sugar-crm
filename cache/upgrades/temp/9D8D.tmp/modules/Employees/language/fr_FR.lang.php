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
  'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
  'ERR_EMPLOYEE_NAME_EXISTS_1' => 'Le nom de l&#39;employé',
  'ERR_EMPLOYEE_NAME_EXISTS_2' => 'existe déjà. La duplication des Noms d&#39;employés est interdite.  Modifier le nom de l&#39;employé afin qu&#39;il soit unique.',
  'ERR_LAST_ADMIN_1' => 'Le nom de l&#39;employé',
  'ERR_LAST_ADMIN_2' => '" est le dernier employé disposant de droits administrateur.  Au moins un employé doit être un administrateur.',
  'LBL_ADDRESS' => 'Adresse:',
  'LBL_ADDRESS_CITY' => 'Adresse Ville',
  'LBL_ADDRESS_COUNTRY' => 'Adresse Pays',
  'LBL_ADDRESS_INFORMATION' => 'Adresse',
  'LBL_ADDRESS_POSTALCODE' => 'Adresse Code Postal',
  'LBL_ADDRESS_STATE' => 'Adresse Région',
  'LBL_ADDRESS_STREET' => 'Adresse Rue',
  'LBL_ADMIN' => 'Administrateur:',
  'LBL_ANY_ADDRESS' => 'Adresse (toute):',
  'LBL_ANY_EMAIL' => 'Email (tous):',
  'LBL_ANY_PHONE' => 'Téléphone (tous):',
  'LBL_AUTHENTICATE_ID' => 'ID d&#39;authentification',
  'LBL_CITY' => 'Ville:',
  'LBL_COUNTRY' => 'Pays:',
  'LBL_CREATED_BY_NAME' => 'Créé par',
  'LBL_CREATE_USER_BUTTON_KEY' => 'N',
  'LBL_CREATE_USER_BUTTON_LABEL' => 'Créer Utilisateur',
  'LBL_CREATE_USER_BUTTON_TITLE' => 'Créer Utilisateur [Alt+N]',
  'LBL_CURRENCY' => 'Devise:',
  'LBL_DATE_ENTERED' => 'Date de création',
  'LBL_DATE_FORMAT' => 'Format Date:',
  'LBL_DATE_MODIFIED' => 'Date de modification',
  'LBL_DEFAULT_TEAM' => 'Equipe par défaut:',
  'LBL_DEFAULT_TEAM_TEXT' => 'Sélectionner l&#39;équipe par défaut pour les nouveaux enregistrements',
  'LBL_DELETED' => 'Supprimé',
  'LBL_DELETE_EMPLOYEE_CONFIRM' => 'Etes vous sûr de vouloir supprimer cet employé ?',
  'LBL_DELETE_USER_CONFIRM' => 'Cet employé est aussi un utilisateur. Effacer cet employé effacera également l&#39;utilisateur, et l&#39;utilisateur ne pourra plus accéder à l&#39;application. Souhaitez-vous vraiment supprimer cet enregistrement ?',
  'LBL_DEPARTMENT' => 'Service:',
  'LBL_DESCRIPTION' => 'Description',
  'LBL_EMAIL' => 'Email:',
  'LBL_EMAIL_ADDRESS' => 'Adresse Email',
  'LBL_EMAIL_LINK_TYPE' => 'Client email utilisé',
  'LBL_EMAIL_LINK_TYPE_HELP' => '<b>Client Mail SugarCRM</b> : client mail présent dans le module Emails de SugarCRM.<br><b>Client Mail Externe</b> : autre client mail, comme par exemple Microsoft Outlook.',
  'LBL_EMPLOYEE' => 'Employés:',
  'LBL_EMPLOYEE_INFORMATION' => 'Information Employé',
  'LBL_EMPLOYEE_NAME' => 'Nom Employé:',
  'LBL_EMPLOYEE_SETTINGS' => 'Paramètres Employés',
  'LBL_EMPLOYEE_STATUS' => 'Statut Employé:',
  'LBL_ERROR' => 'Erreur:',
  'LBL_EXT_AUTHENTICATE' => 'Authentification externe',
  'LBL_FAVORITE_COLOR' => 'Couleur favorite:',
  'LBL_FAX' => 'Fax:',
  'LBL_FAX_PHONE' => 'Fax',
  'LBL_FF_CLEAR' => 'Vider',
  'LBL_FIRST_NAME' => 'Prénom:',
  'LBL_GROUP' => 'Groupe de l&#39;Utilisateur',
  'LBL_GROUP_USER' => 'Utilisateur groupe',
  'LBL_HOME_PHONE' => 'Ligne directe:',
  'LBL_IS_ADMIN' => 'Administrateur ?',
  'LBL_LANGUAGE' => 'Langue:',
  'LBL_LAST_NAME' => 'Nom de Famille:',
  'LBL_LIST_ACCEPT_STATUS' => 'Statut d&#39;acceptation',
  'LBL_LIST_ADMIN' => 'Admin',
  'LBL_LIST_DEPARTMENT' => 'Service',
  'LBL_LIST_DESCRIPTION' => 'Description',
  'LBL_LIST_EMAIL' => 'Email',
  'LBL_LIST_EMPLOYEE_NAME' => 'Nom Employé',
  'LBL_LIST_EMPLOYEE_STATUS' => 'Statut de l&#39;employé',
  'LBL_LIST_FORM_TITLE' => 'Employés',
  'LBL_LIST_LAST_NAME' => 'Nom',
  'LBL_LIST_NAME' => 'Nom',
  'LBL_LIST_PRIMARY_PHONE' => 'Téléphone principal',
  'LBL_LIST_REPORTS_TO_NAME' => 'Rend compte à',
  'LBL_LIST_USER_NAME' => 'Nom Utilisateur',
  'LBL_LOGIN' => 'Login',
  'LBL_MESSENGER_ID' => 'Nom IM:',
  'LBL_MESSENGER_TYPE' => 'Type IM:',
  'LBL_MOBILE_PHONE' => 'Téléphone Mobile:',
  'LBL_MODIFIED_BY' => 'Modifié par',
  'LBL_MODIFIED_BY_ID' => 'Modifié par (ID)',
  'LBL_MODULE_NAME' => 'Employés',
  'LBL_MODULE_NAME_SINGULAR' => 'Employé',
  'LBL_MODULE_TITLE' => 'Employés',
  'LBL_MY_TEAMS' => 'Equipes',
  'LBL_NAME' => 'Nom:',
  'LBL_NEW_EMPLOYEE_BUTTON_KEY' => 'N',
  'LBL_NEW_EMPLOYEE_BUTTON_LABEL' => 'Nouvel Employé',
  'LBL_NEW_EMPLOYEE_BUTTON_TITLE' => 'Nouvel Employé [Alt+N]',
  'LBL_NEW_FORM_TITLE' => 'Nouvel Employé',
  'LBL_NOTES' => 'Notes:',
  'LBL_OFFICE_PHONE' => 'Téléphone:',
  'LBL_ONLY_ACTIVE' => 'Employés actifs',
  'LBL_OTHER' => 'Autre:',
  'LBL_OTHER_EMAIL' => 'Email Autre:',
  'LBL_OTHER_PHONE' => 'Autre:',
  'LBL_PASSWORD' => 'Mot de passe:',
  'LBL_PHOTO' => 'Photo',
  'LBL_PICTURE_FILE' => 'Photo',
  'LBL_PORTAL_ONLY' => 'Uniquement Utilisateur du Portail',
  'LBL_PORTAL_ONLY_USER' => 'Utilisateur API Portail',
  'LBL_POSTAL_CODE' => 'Code Postal:',
  'LBL_PRIMARY_ADDRESS' => 'Adresse Principale:',
  'LBL_PSW_MODIFIED' => 'Dernier changement du Mot de passe',
  'LBL_RECEIVE_NOTIFICATIONS' => 'Notifier sur assignation',
  'LBL_REPORTS_TO' => 'Rend compte à (ID):',
  'LBL_REPORTS_TO_NAME' => 'Rend compte à',
  'LBL_RESET_PREFERENCES' => 'Rétablir les Paramètres par défaut',
  'LBL_SAVED_SEARCH' => 'Recherches sauvegardées',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Employé',
  'LBL_SELECT' => 'Sélectionner',
  'LBL_SHOW_ON_EMPLOYEES' => 'Afficher l&#39;information de l&#39;employé',
  'LBL_STATE' => 'Région:',
  'LBL_STATUS' => 'Statut',
  'LBL_SUGAR_LOGIN' => 'Est un utilisateur SugarCRM',
  'LBL_SYSTEM_GENERATED_PASSWORD' => 'Mot de passe généré par le système',
  'LBL_THEME' => 'Thème:',
  'LBL_TIMEZONE' => 'Fuseau Horaire:',
  'LBL_TIME_FORMAT' => 'Format Heure:',
  'LBL_TITLE' => 'Fonction:',
  'LBL_USER_HASH' => 'Mot de passe',
  'LBL_USER_NAME' => 'Nom d&#39;utilisateur',
  'LBL_USER_TYPE' => 'Type d&#39;utilisateur',
  'LBL_WORK_PHONE' => 'Téléphone:',
  'LNK_EDIT_TABS' => 'Editer les onglets',
  'LNK_EMPLOYEE_LIST' => 'Employés',
  'LNK_NEW_EMPLOYEE' => 'Créer Employé',
  'NTC_REMOVE_TEAM_MEMBER_CONFIRMATION' => 'Etes-vous sûr(e) de vouloir supprimer cette relation avec l&#39;employé ?',
);

