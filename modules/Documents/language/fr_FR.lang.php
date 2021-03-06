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
  'DEF_CREATE_LOG' => 'Document créé',
  'ERR_DELETE_CONFIRM' => 'Voulez vous effacer cette version du document?',
  'ERR_DELETE_LATEST_VERSION' => 'Vous n&#39;êtes pas autorisé à effacer la dernière version d&#39;un document.',
  'ERR_DOC_ACTIVE_DATE' => 'Date de mise à disposition',
  'ERR_DOC_EXP_DATE' => 'Date expiration',
  'ERR_DOC_NAME' => 'Nom Document',
  'ERR_DOC_VERSION' => 'Version du Document',
  'ERR_FILENAME' => 'Nom Fichier',
  'ERR_INVALID_EXTERNAL_API_ACCESS' => 'L&#39;utilisateur tente d&#39;accéder à une API externe invalide ({0})',
  'ERR_INVALID_EXTERNAL_API_LOGIN' => 'La vérification du login a échoué pour l&#39;API externe ({0})',
  'ERR_MISSING_FILE' => 'Ce document ne contient pas de fichier, probablement à cause d&#39;une erreur lors du transfert. Veuillez essayer de nouveau ou contacter votre administrateur.',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_ACTIVE_DATE' => 'Date de mise à disposition',
  'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
  'LBL_BUGS_SUBPANEL_TITLE' => 'Bugs',
  'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
	'LBL_CATEGORY'											=> 'Catégorie',
  'LBL_CATEGORY_VALUE' => 'Catégorie',
  'LBL_CAT_OR_SUBCAT_UNSPEC' => 'Non-spécifié',
  'LBL_CHANGE_LOG' => 'Description des modifications:',
  'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
  'LBL_CONTRACTS' => 'Contrats',
  'LBL_CONTRACTS_SUBPANEL_TITLE' => 'Contrats relatifs',
  'LBL_CONTRACT_NAME' => 'Nom du Contrat:',
  'LBL_CONTRACT_STATUS' => 'Statut Contrat:',
  'LBL_CREATED' => 'Créé par',
	'LBL_CREATED_BY'										=> 'Créé par',
  'LBL_CREATED_USER' => 'Créé par',
	'LBL_DATE_ENTERED'										=> 'Date de création',
	'LBL_DATE_MODIFIED'										=> 'Date de modification',
	'LBL_DELETED'											=> 'Supprimé',
  'LBL_DESCRIPTION' => 'Description',
  'LBL_DET_IS_TEMPLATE' => 'Modèle ? :',
  'LBL_DET_RELATED_DOCUMENT' => 'Document relatif:',
  'LBL_DET_RELATED_DOCUMENT_VERSION' => 'Version du Document lié:',
  'LBL_DET_TEMPLATE_TYPE' => 'Type de Document:',
	'LBL_DOCUMENT'											=> 'Document relatif',
  'LBL_DOCUMENT_ID' => 'Ref Document',
  'LBL_DOCUMENT_INFORMATION' => 'Informations Document',
  'LBL_DOCUMENT_NAME' => 'Nom du Document',
  'LBL_DOCUMENT_REVISION_ID' => 'Versions de Document (ID)',
  'LBL_DOC_ACTIVE_DATE' => 'Date de publication:',
  'LBL_DOC_DESCRIPTION' => 'Description:',
  'LBL_DOC_EXP_DATE' => 'Date expiration:',
  'LBL_DOC_ID' => 'ID du document orignal',
  'LBL_DOC_NAME' => 'Nom du Document:',
  'LBL_DOC_REV_HEADER' => 'Versions de Document',
  'LBL_DOC_STATUS' => 'Statut:',
  'LBL_DOC_STATUS_ID' => 'Statut (ID) :',
  'LBL_DOC_TYPE' => 'Origine',
  'LBL_DOC_TYPE_POPUP' => 'Sélectionner la source vers laquelle ce document sera envoyé et à partir de laquelle il sera disponible',
  'LBL_DOC_URL' => 'URL du document orignal',
  'LBL_DOC_VERSION' => 'Version:',
  'LBL_DOWNNLOAD_FILE' => 'Fichier Téléchargeable:',
	'LBL_EXPIRATION_DATE'									=> 'Date expiration',
  'LBL_EXTERNAL_DOCUMENT_NOTE' => 'Les 20 premiers fichiers les plus récemment modifiés sont affichés dans l&#39;ordre décroissant ci-dessous. Utilisez la recherche pour trouver d&#39;autres fichiers.',
  'LBL_FILENAME' => 'Nom du Fichier:',
	'LBL_FILE_EXTENSION'									=> 'Extension du fichier',
  'LBL_FILE_UPLOAD' => 'Fichier :',
  'LBL_FILE_URL' => 'URL Fichier',
  'LBL_HOMEPAGE_TITLE' => 'Mes documents',
  'LBL_IS_TEMPLATE' => 'Est un Modèle',
  'LBL_LASTEST_REVISION_NAME' => 'Nom de la dernière révision:',
  'LBL_LAST_REV_CREATE_DATE' => 'Date de dernière Révision Créée',
	'LBL_LAST_REV_CREATOR'									=> 'Version initialisée par:',
	'LBL_LAST_REV_DATE'										=> 'Date version:',
  'LBL_LAST_REV_MIME_TYPE' => 'Dernière révision Type Mime',
  'LBL_LATEST_REVISION' => 'Derniére version',
  'LBL_LATEST_REVISION_ID' => 'ID de la dernière révision',
  'LBL_LINKED_ID' => 'Linked id',
  'LBL_LIST_ACTIVE_DATE' => 'Date de mise à disposition',
  'LBL_LIST_CATEGORY' => 'Catégorie',
  'LBL_LIST_DOCUMENT' => 'Document',
  'LBL_LIST_DOCUMENT_NAME' => 'Nom Document',
  'LBL_LIST_DOC_TYPE' => 'Origine',
  'LBL_LIST_DOWNLOAD' => 'Téléchargement',
  'LBL_LIST_EXP_DATE' => 'Date expiration',
  'LBL_LIST_EXT_DOCUMENT_NAME' => 'Nom du fichier',
  'LBL_LIST_FILENAME' => 'Nom du fichier',
	'LBL_LIST_FORM_TITLE'									=> 'Liste des documents',
  'LBL_LIST_IS_TEMPLATE' => 'Modèle ?',
	'LBL_LIST_LAST_REV_CREATOR'								=> 'Publié par',
	'LBL_LIST_LAST_REV_DATE'								=> 'Date version',
  'LBL_LIST_LATEST_REVISION' => 'Derniére version',
  'LBL_LIST_REVISION' => 'Version',
  'LBL_LIST_SELECTED_REVISION' => 'Version sélectionnée',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_SUBCATEGORY' => 'Sous Catégorie',
  'LBL_LIST_TEMPLATE_TYPE' => 'Type de Document',
	'LBL_LIST_VIEW_DOCUMENT'								=> 'Afficher',
  'LBL_MAIL_MERGE_DOCUMENT' => 'Modèle utilisable dans un publipostage:',
  'LBL_MIME' => 'Type Mime',
  'LBL_MODIFIED' => 'Modifié par (ID)',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Documents',
  'LBL_MODULE_NAME_SINGULAR' => 'Document',
  'LBL_MODULE_TITLE' => 'Documents',
  'LBL_NAME' => 'Nom Document',
  'LBL_NEW_FORM_TITLE' => 'Nouveau Document',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
  'LBL_PRODUCTS_SUBPANEL_TITLE' => 'Produits',
  'LBL_QUOTES_SUBPANEL_TITLE' => 'Devis',
  'LBL_RELATED_DOCUMENT_ID' => 'ID du document lié',
  'LBL_RELATED_DOCUMENT_REVISION_ID' => 'ID de la version du document lié',
  'LBL_REVISION' => 'Version',
  'LBL_REVISIONS' => 'Révisions',
	'LBL_REVISIONS_PANEL'									=> 'Détails Révisions',
	'LBL_REVISIONS_SUBPANEL'								=> 'Révisions',
  'LBL_REVISION_NAME' => 'Numéro de version',
  'LBL_SEARCH_EXTERNAL_DOCUMENT' => 'Nom du document',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Document',
  'LBL_SELECTED_REVISION_FILENAME' => 'Nom du fichier de la révision sélectionné',
  'LBL_SELECTED_REVISION_ID' => 'ID de la révision sélectionné',
  'LBL_SELECTED_REVISION_NAME' => 'Nom de la révision sélectionné:',
  'LBL_SF_ACTIVE_DATE' => 'Date de publication:',
  'LBL_SF_CATEGORY' => 'Catégorie',
	'LBL_SF_DOCUMENT'										=> 'Nom du Document:',
  'LBL_SF_EXP_DATE' => 'Date expiration:',
	'LBL_SF_SUBCATEGORY'									=> 'Sous Catégorie:',
  'LBL_STATUS' => 'Statut',
  'LBL_SUBCATEGORY' => 'Sous Catégorie',
  'LBL_SUBCATEGORY_VALUE' => 'Sous Catégorie:',
  'LBL_TEAM' => 'Equipe:',
  'LBL_TEMPLATE_TYPE' => 'Type de Document',
  'LBL_THEREVISIONS_SUBPANEL_TITLE' => 'Révisions',
  'LBL_TREE_TITLE' => 'Documents',
  'LNK_DOCUMENT_LIST' => 'Liste des Documents',
  'LNK_NEW_DOCUMENT' => 'Créer Document',
	'LNK_NEW_MAIL_MERGE'									=> 'Publipostage',
);
