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
  'ERR_FIX_MESSAGES' => 'Veuillez corriger les erreurs suivantes avant de continuer',
  'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Seules les valeurs entières sont permisses pour le Nombre  d&#39;emails envoyés par batch',
  'ERR_MESS_DUPLICATE_FOR_LIST' => 'Plusieurs Messages sont définis pour cette Liste de Cibles',
  'ERR_MESS_NOT_FOUND_FOR_LIST' => 'Pas de Message pour cette Liste de Cibles',
  'ERR_NO_EMAIL_MARKETING' => 'Il doit y avoir au moins un Email Marketing actif associé à la campagne.',
  'ERR_NO_MAILBOX' => 'Les Emails Marketings ci-dessous ne sont associés à aucune boîte Email.<br />Veuillez corriger ce problème avant de continuer.',
  'ERR_NO_OPTS_SAVED' => 'Pas de paramètres optimaux sauvegardés avec votre boîte email entrante.',
  'ERR_NO_TARGET_LISTS' => 'Il doit y avoir au moins une liste de cibles associée à la campagne.',
  'ERR_NO_TEST_TARGET_LISTS' => 'Il doit y avoir au moins une Liste de Cibles de type "Test" associée à la campagne.',
  'ERR_REVIEW_EMAIL_SETTINGS' => 'Veuillez revoir vos paramètre emails entrants.',
  'ERR_SENDING_NOW' => 'Des Messages sont envoyés, veuillez essayer plus tard.',
  'LBL_ACCOUNTS' => 'Comptes',
  'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_ADD_TARGET' => 'Ajouter',
  'LBL_ADD_TRACKER' => 'Créer un Tracker',
  'LBL_ALERT' => 'Alerte',
  'LBL_ALL_PROSPECT_LISTS' => 'Toutes les listes cibles dans la Campagne.',
  'LBL_ALREADY_SUBSCRIBED_HEADER' => 'Abonné(e) à',
  'LBL_AMOUNT_IN' => 'Montant en',
  'LBL_ASSIGNED_TO' => 'Assignée à: ',
  'LBL_ASSIGNED_TO_ID' => 'Assignée à  (ID):',
  'LBL_ASSIGNED_TO_NAME' => 'Assignée à:',
  'LBL_AVALAIBLE_FIELDS_HEADER' => 'Champs disponibles',
  'LBL_BACK_TO_CAMPAIGNS' => 'Retour aux campagnes',
  'LBL_BLOCKED_SUBPANEL_TITLE' => 'Bloqués',
  'LBL_CAMPAIGN' => 'Campagne:',
  'LBL_CAMPAIGN_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
  'LBL_CAMPAIGN_ACTUAL_COST' => 'Coût réel:',
  'LBL_CAMPAIGN_BUDGET' => 'Budget:',
  'LBL_CAMPAIGN_CONTENT' => 'Description:',
  'LBL_CAMPAIGN_COST_PER_CLICK_THROUGH' => 'Coût par clic:',
  'LBL_CAMPAIGN_COST_PER_IMPRESSION' => 'Coût par impression:',
  'LBL_CAMPAIGN_DAYS_REMAIN' => 'Jours restants',
  'LBL_CAMPAIGN_DIAGNOSTICS' => 'Diagnostiques',
  'LBL_CAMPAIGN_END_DATE' => 'Date de fin: ',
  'LBL_CAMPAIGN_EXPECTED_COST' => 'Coût estimé: ',
  'LBL_CAMPAIGN_EXPECTED_REVENUE' => 'Revenu attendu: ',
  'LBL_CAMPAIGN_FREQUENCY' => 'Périodicité',
  'LBL_CAMPAIGN_IMPRESSIONS' => 'Impressions:',
  'LBL_CAMPAIGN_INACTIVE_SCHEDULE' => 'La campagne &#39;{0}&#39; est en statut &#39;Annulée&#39;. Vous devez modifier le statut en &#39;En cours&#39;.',
  'LBL_CAMPAIGN_INFORMATION' => 'Informations Campagne',
  'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Lead(s) lié(s) à la campagne',
  'LBL_CAMPAIGN_NAME' => 'Nom:',
  'LBL_CAMPAIGN_NOT_SELECTED' => 'Sélectionner et associer une campagne:',
  'LBL_CAMPAIGN_OBJECTIVE' => 'Objectif:',
  'LBL_CAMPAIGN_OPPORTUNITIES_WON' => 'Nombre d&#39;affaires gagnées liées à la Campagne:',
  'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Résultats de la Campagne',
  'LBL_CAMPAIGN_RETURN_ON_INVESTMENT' => 'Retour sur Investissement de la Campagne',
  'LBL_CAMPAIGN_START_DATE' => 'Date de début:',
  'LBL_CAMPAIGN_STATUS' => 'Statut:',
  'LBL_CAMPAIGN_TYPE' => 'Type:',
  'LBL_CAMPAIGN_WIZARD' => 'Nouvelle Campagne (Assistant)',
  'LBL_CAMPAIGN_WIZARD_START_TITLE' => 'Editer la Campagne:',
  'LBL_CAMP_MESSAGE_COPY' => 'Garder une copie des messages envoyés via les Campagnes:',
  'LBL_CAMP_MESSAGE_COPY_DESC' => 'Voulez-vous stocker une copie complère de <bold>CHAQUE</bold> email envoyé durant toutes les campagnes ?  <bold>Par défaut cette valeur est positionné à Non, c&#39;est aussi ce que nous recommandons</bold>. En choisissant Non, uniquement le modèle du mail sera stocké et les variables seront nécessaires pour re-créer les messages individuels.',
  'LBL_CHARSET_NOTICE' => 'NOTICE : Veuillez vous assurer que la page contenant le formulaire de web-to-lead contient les lignes suivantes dans la section <head> :',
  'LBL_CHOOSE_CAMPAIGN_TYPE' => 'Type de Campagne',
  'LBL_CHOOSE_NEXT_STEP' => 'Choisissez votre prochaine étape',
  'LBL_CONFIRM' => 'Continuer',
  'LBL_CONFIRM_CAMPAIGN_SAVE_CONTINUE' => 'Sauvegarder le travail et passer à l&#39;Email Marketing',
  'LBL_CONFIRM_CAMPAIGN_SAVE_EXIT' => 'Souhaitez-vous sauvegarder les informations et quitter ?',
  'LBL_CONFIRM_CAMPAIGN_SAVE_OPTIONS' => 'Sauvegarder les Options',
  'LBL_CONFIRM_SEND_SAVE' => 'Vous êtes sur le point de quitter et de poursuivre sur la page d&#39;envoi de Campagne Email. Souhaitez-vous sauvegarder et poursuivre ?',
  'LBL_CONTACTS' => 'Contacts',
  'LBL_CONTACT_SUBPANEL_TITLE' => 'Contacts',
  'LBL_COPY_AND_PASTE_CODE' => 'Ou copiez et collez le code HTML ci-dessous dans une page existante',
  'LBL_COPY_OF' => 'Copie de',
  'LBL_CREATED' => 'Créée par:',
  'LBL_CREATED_BY' => 'Créée par: ',
  'LBL_CREATED_USER' => 'Créé par',
  'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
  'LBL_CREATE_MAILBOX' => 'Créer une nouvelle Boîte Mail',
  'LBL_CREATE_NEWSLETTER' => 'Nouvelle Newsletter',
  'LBL_CREATE_NEW_MARKETING_EMAIL' => 'Créer un nouveau Message',
  'LBL_CREATE_TARGET' => 'Créer',
  'LBL_CREATE_WEB_TO_LEAD_FORM' => 'CreateWebToLeadForm',
  'LBL_CURRENCY' => 'Devise',
  'LBL_CURRENCY_ID' => 'ID Devise',
  'LBL_CUSTOM_LOCATION' => 'Personnalisé',
  'LBL_DATE_CREATED' => 'Date de création: ',
  'LBL_DATE_ENTERED' => 'Date de création',
  'LBL_DATE_LAST_MODIFIED' => 'Date de modification: ',
  'LBL_DATE_MODIFIED' => 'Date de modification',
  'LBL_DATE_START' => 'Date de début',
  'LBL_DAY' => 'Jour',
  'LBL_DEFAULT' => 'Toutes les listes de cibles',
  'LBL_DEFAULT_FROM_ADDR' => '"From" Défaut:',
  'LBL_DEFAULT_LEAD_SUBMIT' => 'Envoyer',
  'LBL_DEFAULT_LIST_ENTRIES_NOT_FOUND' => 'Aucune entrée n&#39;a été trouvée',
  'LBL_DEFAULT_LIST_ENTRIES_WERE_PROCESSED' => 'Les entrées ont été traitées',
  'LBL_DEFAULT_LIST_NOT_FOUND' => 'La liste cible de type défaut n&#39;a pas été trouvée',
  'LBL_DEFAULT_LOCATION' => 'Par défaut',
  'LBL_DEFAULT_SUBPANEL_TITLE' => 'Campagnes',
  'LBL_DEFINE_LEAD_HEADER' => 'Titre:',
  'LBL_DEFINE_LEAD_POST_URL' => 'URL d&#39;envoi:',
  'LBL_DEFINE_LEAD_REDIRECT_URL' => 'URL de redirection:',
  'LBL_DEFINE_LEAD_SUBMIT' => 'Libellé du bouton d&#39;envoi:',
  'LBL_DELETE' => 'Supprimer',
  'LBL_DELETE_INLINE' => 'Supprimer',
  'LBL_DESCRIPTION_LEAD_FORM' => 'Texte apparaissant au dessus du formulaire:',
  'LBL_DESCRIPTION_TEXT_LEAD_FORM' => 'Soumettre le formulaire créera un lead et le liera à la campagne',
  'LBL_DIAGNOSTIC' => 'Diagnostique',
  'LBL_DIAGNOSTIC_WIZARD' => 'Diagnostics',
  'LBL_DOWNLOAD_TEXT_WEB_TO_LEAD_FORM' => '</b>Cliquez sur le lien ci-dessous avec le bouton <u>droit</u> de votre souris et choisissez "Enregistrer la cible sous" afin de télécharger votre formulaire de capture de Leads.<br>Vous pourrez alors placer ce formulaire sur votre site Web.<br>',
  'LBL_DOWNLOAD_WEB_TO_LEAD_FORM' => 'Formulaire Web de Lead',
  'LBL_DRAG_DROP_COLUMNS' => 'Le formulaire comporte 2 colonnes.</b><br>Choisissez les champs qui devront apparaître dans les colonnes 1 et 2 en glissant les champs dans les colonnes adéquates.<br>&nbsp;',
  'LBL_EDIT_EMAIL_TEMPLATE' => 'Editer',
  'LBL_EDIT_EXISTING' => 'Editer',
  'LBL_EDIT_INLINE' => 'Editer',
  'LBL_EDIT_LAYOUT' => 'Editer la mise en page',
  'LBL_EDIT_LEAD_POST_URL' => 'Editer l&#39;URL d&#39;envoi?',
  'LBL_EDIT_OPT_OUT' => 'Lien de suppression',
  'LBL_EDIT_OPT_OUT_' => 'Lien de suppression ?',
  'LBL_EDIT_TARGET_LIST' => 'Editer Liste Cible',
  'LBL_EDIT_TRACKER_NAME' => 'Nom',
  'LBL_EDIT_TRACKER_URL' => 'URL',
  'LBL_ELECTED_TO_OPTOUT' => 'Vous avez choisi de vous désinscrire et de ne plus recevoir des emails.',
  'LBL_EMAIL' => 'Email',
  'LBL_EMAILMARKETING_SUBPANEL_TITLE' => 'Email Marketing',
  'LBL_EMAILS_PER_RUN' => 'Nombre d&#39;emails envoyés par batch',
  'LBL_EMAILS_SCHEDULED' => 'Emails plannifiés',
  'LBL_EMAIL_CAMPAIGNS_TITLE' => 'Campagnes Email',
  'LBL_EMAIL_COMPONENTS' => 'Composant Email',
  'LBL_EMAIL_MARKETING_SUBPANEL_TITLE' => 'Message(s)',
  'LBL_EMAIL_SETUP_DESC' => 'Remplissez le formulaire ci-dessous pour modifier les paramètres Système SugarCRM utilisés pour envoyer les Emails de Campagne.<br>Attention: "Nom de l&#39;expéditeur" et "Email de l&#39;expéditeur" sont redéfinis lors de l&#39;envoi des Messages de la Campagnes.',
  'LBL_EMAIL_SETUP_WIZ' => 'Lancer la configuration Email',
  'LBL_EMAIL_SETUP_WIZARD' => 'Paramètrages',
  'LBL_EMAIL_SETUP_WIZARD_TITLE' => 'Paramètrages liés aux Emails',
  'LBL_FILTER_CHART_BY' => 'Filtre appliqué:',
  'LBL_FINISH' => 'Terminer',
  'LBL_FROM_ADDR' => 'Email de l&#39;expéditeur:',
  'LBL_FROM_MAILBOX_NAME' => 'Boîte utilisée pour l&#39;envoi:',
  'LBL_FROM_NAME' => 'Nom de l&#39;expéditeur:',
  'LBL_HOME_START_MESSAGE' => 'Sélectionnez le type de Campagne que vous souhaitez créer.',
  'LBL_IMPORT_PROSPECTS' => 'Import Suspects',
  'LBL_INVALID' => 'Invalide',
  'LBL_INVALID EMAIL_SUBPANEL_TITLE' => 'Emails invalides',
  'LBL_INVITEE' => 'Contacts',
  'LBL_LEADS' => 'Leads',
  'LBL_LEADS_DELETED_SINCE_CREATED' => '{0} leads qui ont été créés par cette campagne ont été effacés depuis la création.',
  'LBL_LEADS_SUBPANEL_TITLE' => 'Leads',
  'LBL_LEAD_DEFAULT_HEADER' => 'Formulaire Web de Capture de Leads pour la Campagne',
  'LBL_LEAD_FOOTER' => 'Texte apparaissant au dessous du formulaire:',
  'LBL_LEAD_FORM_FIRST_HEADER' => 'Première Colonne',
  'LBL_LEAD_FORM_SECOND_HEADER' => 'Seconde Colonne',
  'LBL_LEAD_FORM_WIZARD' => 'Assistant de Formulaire de Capture de Leads',
  'LBL_LEAD_MODULE' => 'Leads',
  'LBL_LEAD_NOTIFY_CAMPAIGN' => 'Campagne liée:',
  'LBL_LEAD_SUBPANEL_TITLE' => 'Leads',
  'LBL_LINK_SUBPANEL_TITLE' => 'liens',
  'LBL_LIST_CAMPAIGN_NAME' => 'Campagne',
  'LBL_LIST_END_DATE' => 'Date de fin',
  'LBL_LIST_FORM_TITLE' => 'Liste des campagnes',
  'LBL_LIST_NAME' => 'Nom',
  'LBL_LIST_START_DATE' => 'Date de début',
  'LBL_LIST_STATUS' => 'Statut',
  'LBL_LIST_TO_ACTIVITY' => 'Affichage des Vues des Activités',
  'LBL_LIST_TYPE' => 'Type',
  'LBL_LOCATION_TRACK' => 'Localisation du "tracker" (campaign_tracker.php):',
  'LBL_LOGIN' => 'Identifiant',
  'LBL_LOG_ENTRIES' => 'Suivis (logs)',
  'LBL_LOG_ENTRIES_BLOCKEDD_TITLE' => 'Cibles exclues',
  'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contacts créés',
  'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Bounces (Email Invalide)',
  'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Leads créés',
  'LBL_LOG_ENTRIES_LINK_TITLE' => 'Liens cliqués',
  'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Cibles ne voulant pas recevoir d&#39;emailing',
  'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Bounces (Autre)',
  'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Messages envoyés',
  'LBL_LOG_ENTRIES_TITLE' => 'Réponses',
  'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Messages lus',
  'LBL_MAILBOX' => 'Dossier surveillé',
  'LBL_MAILBOX_CHECK1_BAD' => 'Aucune boîte(s) Mail de gestion des retours détectée.',
  'LBL_MAILBOX_CHECK1_GOOD' => 'boîte(s) Mail de gestion des retours détectée(s):',
  'LBL_MAILBOX_CHECK2_BAD' => 'Merci de configurer les paramètres liés aux emails.',
  'LBL_MAILBOX_CHECK2_GOOD' => 'Les paramètres liés aux emails sont correctement configurés.',
  'LBL_MAILBOX_CHECK_WIZ_BAD' => 'Aucune boîte mail avec interception des bounce détectée, merci d&#39;en créer une ci-dessous.',
  'LBL_MAILBOX_CHECK_WIZ_GOOD' => 'boîte(s) Mail de gestion des retours a été détectée(s).<br>Vous n&#39;avez pas besoin d&#39;en créer une nouvelle, mais vous pouvez toujours le faire si vous le souhaitez.<br>&nbsp;',
  'LBL_MAILBOX_DEFAULT' => 'INBOX',
  'LBL_MAILBOX_NAME' => 'Nom de la boîte Mail',
  'LBL_MAIL_SENDTYPE' => 'Agent de Transfert Mail:',
  'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification&nbsp;SMTP ?',
  'LBL_MAIL_SMTPPASS' => 'Mot de passe SMTP:',
  'LBL_MAIL_SMTPPORT' => 'Port SMTP',
  'LBL_MAIL_SMTPSERVER' => 'Serveur SMTP',
  'LBL_MAIL_SMTPUSER' => 'Utilisateur SMTP',
  'LBL_MANAGE_SUBSCRIPTIONS_TITLE' => 'Newsletters',
  'LBL_MARKETING_CHECK1_BAD' => 'Aucun Composant Email marketing détecté, vous devez en créer pour envoyer une campagne.',
  'LBL_MARKETING_CHECK1_GOOD' => 'Composants Email marketing détectés.',
  'LBL_MARKETING_CHECK2_BAD' => 'Aucune Liste Cible détectée, vous devez en créer à partir de l&#39;interface correspondante.',
  'LBL_MARKETING_CHECK2_GOOD' => 'Listes Cibles détectées.',
  'LBL_MARK_AS_SENT' => 'Marquer comme envoyé',
  'LBL_MASS_MAILING_TITLE' => 'Options pour l&#39;envoi de masse des emails',
  'LBL_MESSAGE_FOR' => 'Destinataires:',
  'LBL_MESSAGE_QUEUE_TITLE' => 'Messages dans la file d&#39;attente',
  'LBL_MODIFIED' => 'Modifiée par:',
  'LBL_MODIFIED_BY' => 'Modifiée par:',
  'LBL_MODIFIED_USER' => 'Modifié par',
  'LBL_MODULE_NAME' => 'Campagnes',
  'LBL_MODULE_NAME_SINGULAR' => 'Campagne',
  'LBL_MODULE_TITLE' => 'Campagnes',
  'LBL_MONTH' => 'Mois',
  'LBL_MORE_DETAILS' => 'Plus de Détails',
  'LBL_MRKT_NAME' => 'Nom',
  'LBL_NAME' => 'Nom:',
  'LBL_NAVIGATION_MENU_GEN1' => 'Identification',
  'LBL_NAVIGATION_MENU_GEN2' => 'Budget',
  'LBL_NAVIGATION_MENU_MARKETING' => 'Nouveau&nbsp;Message',
  'LBL_NAVIGATION_MENU_NEW_MAILBOX' => 'Gestion des Retours',
  'LBL_NAVIGATION_MENU_SEND_EMAIL' => 'Envoi&nbsp;du&nbsp;Message',
  'LBL_NAVIGATION_MENU_SETUP' => 'Configuration',
  'LBL_NAVIGATION_MENU_SUBSCRIPTIONS' => 'Cibles',
  'LBL_NAVIGATION_MENU_SUMMARY' => 'Résumé',
  'LBL_NAVIGATION_MENU_TRACKERS' => 'Tracker(s)',
  'LBL_NEWSLETTER' => 'Newsletter',
  'LBL_NEWSLETTER WIZARD_TITLE' => 'Newsletter:',
  'LBL_NEWSLETTERS' => 'Newsletters',
  'LBL_NEWSLETTER_FORENTRY' => 'NewsLetter',
  'LBL_NEWSLETTER_LIST_FORM_TITLE' => 'Liste des newsletters',
  'LBL_NEWSLETTER_TITLE' => 'Campagne : Newsletters',
  'LBL_NEWSLETTER_WIZARD_START_TITLE' => 'Editer la Newsletter: ',
  'LBL_NEW_FORM_TITLE' => 'Nouvelle Campagne',
  'LBL_NO' => 'Non',
  'LBL_NONE' => 'Aucune liste séléctionnée',
  'LBL_NON_ADMIN_ERROR_MSG' => 'Notifiez votre administrateur système pour qu&#39;il puisse corriger ce problème',
  'LBL_NOTIFY_TITLE' => 'Options pour les notifications par mails',
  'LBL_NOT_VALID_EMAIL_ADDRESS' => 'Adresse email invalide',
  'LBL_NO_SUBS_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d&#39;email marketing tant que votre liste d&#39;abonnement ne comporte pas au moins une seule entrée. Vous pouvez remplir votre liste après avoir terminé.',
  'LBL_NO_TARGETS_WARNING' => 'Vous ne pouvez pas envoyer d&#39;email marketing tant que votre campagne ne comporte pas au moins une seule liste cible.',
  'LBL_NO_TARGET_ENTRIES_WARNING' => 'Vous ne pouvez pas envoyer d&#39;email marketing tant que votre liste cible ne comporte pas au moins une seule entrée.  Vous pouvez remplir votre liste après avoir terminé.',
  'LBL_OPPORTUNITIES' => 'Affaires',
  'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
  'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaire(s) liée(s) à la campagne',
  'LBL_OTHER_TYPE_CAMPAIGN' => 'Campagnes non basée sur des emails',
  'LBL_PASSWORD' => 'Mot de Passe',
  'LBL_PORT' => 'Port du Serveur Mail',
  'LBL_PROSPECTLISTS_SUBPANEL_TITLE' => 'Liste de cibles',
  'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Cibles',
  'LBL_PROVIDE_WEB_TO_LEAD_FORM_FIELDS' => 'Merci de renseigner tous les champs requis',
  'LBL_QUEUE_BUTTON_KEY' => 'u',
  'LBL_QUEUE_BUTTON_LABEL' => 'Planifier un envoi d&#39;emails',
  'LBL_QUEUE_BUTTON_TITLE' => 'Envoyer Emails',
  'LBL_RECHECK_BTN' => 'Re-Vérifier',
  'LBL_REFER_URL' => 'URL de redirection Tracker:',
  'LBL_REMOVE' => 'Sup',
  'LBL_REMOVED_SUBPANEL_TITLE' => 'Supprimés',
  'LBL_REPLY_ADDR' => 'Adresse email du "Répondre à":',
  'LBL_REPLY_NAME' => 'Nom du "Répondre à":',
  'LBL_ROI_CHART_BUDGET' => 'Budget',
  'LBL_ROI_CHART_EXPECTED_REVENUE' => 'Revenu attendu',
  'LBL_ROI_CHART_INVESTMENT' => 'Investissement',
  'LBL_ROI_CHART_REVENUE' => 'Revenu',
  'LBL_ROLLOVER_VIEW' => 'Survoler une barre pour voir le détail.',
  'LBL_SAVED_SEARCH' => 'Sauvegarder Recherche & Mise en page',
  'LBL_SAVE_CONTINUE_BUTTON_LABEL' => 'Suite',
  'LBL_SAVE_EXIT_BUTTON_LABEL' => 'Terminer',
  'LBL_SCHEDULER_CHECK1_BAD' => 'Aucun planificateur n&#39;a pas été mis en place pour traiter les retours des emails de Campagnes (emails invalides, boîte cible pleine, etc).',
  'LBL_SCHEDULER_CHECK2_BAD' => 'Aucun planificateur n&#39;a pas été mis en place pour traiter les envois d&#39;emails de Campagnes.',
  'LBL_SCHEDULER_CHECK_BAD' => 'Aucun planificateur détecté',
  'LBL_SCHEDULER_CHECK_GOOD' => 'Planificateurs détectés',
  'LBL_SCHEDULER_COMPONENTS' => 'Composant Planificateur',
  'LBL_SCHEDULER_LINK' => 'aller à l&#39;écran d&#39;administration des planificateurs.',
  'LBL_SCHEDULER_NAME' => 'Planificateur',
  'LBL_SCHEDULER_STATUS' => 'Statut',
  'LBL_SEARCH_FORM_TITLE' => 'Rechercher une campagne',
  'LBL_SELECT_LEAD_FIELDS' => 'Merci de sélectionner à partir des champs disponibles',
  'LBL_SELECT_REQUIRED_LEAD_FIELDS' => 'Merci de sélectionner les champs requis:',
  'LBL_SELECT_TARGET' => 'Utiliser une "Liste de Cibles" existante',
  'LBL_SEND ERROR_SUBPANEL_TITLE' => 'Erreurs d&#39;envoi',
  'LBL_SEND_AS_TEST' => 'Envoyer cet Email en mode TEST',
  'LBL_SEND_EMAIL' => 'Planifier l&#39;envoi',
  'LBL_SERVER_TYPE' => 'Protocole du Serveur Mail',
  'LBL_SERVER_URL' => 'Serveur Mail',
  'LBL_SSL' => 'Utiliser SSL',
  'LBL_SSL_DESC' => 'Si votre Serveur Mail supporte les connexions sécurisées, les activer forcera l&#39;utilisation de connexions SSL quand vous importerez vos emails.',
  'LBL_START' => 'Continuer',
  'LBL_START_DATE_TIME' => 'Début de l&#39;envoi:',
  'LBL_STATUS_TEXT' => 'Statut:',
  'LBL_SUBSCRIPTION_LIST' => 'Abonnées',
  'LBL_SUBSCRIPTION_LIST_NAME' => 'Liste des Cibles "abonnées" à la newsletter:',
  'LBL_SUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les emails de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
  'LBL_SUBSCRIPTION_TYPE_NAME' => 'Abonnés',
  'LBL_TARGETED' => 'Ciblé',
  'LBL_TARGETED_SUBPANEL_TITLE' => 'Ciblés',
  'LBL_TARGET_LIST' => 'Liste de Cibles',
  'LBL_TARGET_LISTS' => 'Listes de Cibles',
  'LBL_TARGET_NAME' => 'Nom',
  'LBL_TARGET_TYPE' => 'Type',
  'LBL_TEAM' => 'Equipe:',
  'LBL_TEMPLATE' => 'Modèle d&#39;email utilisé:',
  'LBL_TEST_BUTTON_KEY' => 'e',
  'LBL_TEST_BUTTON_LABEL' => 'Tester',
  'LBL_TEST_BUTTON_TITLE' => 'Envoyer les emails de Tests',
  'LBL_TEST_EMAILS_SENT' => 'Tester l&#39;envoi des Emails',
  'LBL_TEST_LIST' => 'Testeurs',
  'LBL_TEST_LIST_NAME' => 'Liste des Cibles recevant les tests de la newsletter:',
  'LBL_TEST_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront les emails de TEST de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
  'LBL_TEST_TYPE_NAME' => 'Test',
  'LBL_TIME_START' => 'Heure de début',
  'LBL_TODETAIL_BUTTON_KEY' => 'T',
  'LBL_TODETAIL_BUTTON_LABEL' => 'Retour à la Campagne',
  'LBL_TODETAIL_BUTTON_TITLE' => 'Retour à la Campagne',
  'LBL_TOP_CAMPAIGNS' => 'Top Campagne',
  'LBL_TOP_CAMPAIGNS_DESCRIPTION' => 'Top des campagnes les plus performantes par revenue',
  'LBL_TOP_CAMPAIGNS_NAME' => 'Nom de la campagne',
  'LBL_TOP_CAMPAIGNS_REVENUE' => 'Revenu',
  'LBL_TOTAL_ENTRIES' => 'Inscris',
  'LBL_TOTAL_TARGETED' => 'Total ciblé',
  'LBL_TO_WIZARD' => 'lancer',
  'LBL_TO_WIZARD_TITLE' => 'Assistant',
  'LBL_TRACKED_URLS' => 'Trackers',
  'LBL_TRACKED_URLS_SUBPANEL_TITLE' => 'Trackers',
  'LBL_TRACKERS' => 'Trackers',
  'LBL_TRACKER_COUNT' => 'Nbre de clics:',
  'LBL_TRACKER_KEY' => 'Tracker:',
  'LBL_TRACKER_TEXT' => 'Texte du lien Tracker:',
  'LBL_TRACKER_URL' => 'URL Tracker:',
  'LBL_TRACK_BUTTON_KEY' => 'T',
  'LBL_TRACK_BUTTON_LABEL' => 'Résultats',
  'LBL_TRACK_BUTTON_TITLE' => 'Résultats',
  'LBL_TRACK_DELETE_BUTTON_KEY' => 'D',
  'LBL_TRACK_DELETE_BUTTON_LABEL' => 'Effacer des enregistrements Test',
  'LBL_TRACK_DELETE_BUTTON_TITLE' => 'Effacer des enregistrements Test',
  'LBL_TRACK_DELETE_CONFIRM' => 'Cette option va effacer les logs des tests. Voulez-vous continuer?',
  'LBL_TRACK_QUEUE_SUBPANEL_TITLE' => 'File d&#39;attente',
  'LBL_TRACK_ROI_BUTTON_LABEL' => 'Voir le ROI',
  'LBL_UNSUBSCRIBED_HEADER' => 'Non abonné(e) à',
  'LBL_UNSUBSCRIBED_HEADER_EXPL' => 'Déplacer la NewsLetter dans la liste des NewsLetters disponible(s) pour la désinscription, désinscrira le contact pour cette NewsLetter. Mais cela ne supprimera pas le contact de la liste originale des destinataires ou de la liste originale des cibles.',
  'LBL_UNSUBSCRIPTION_LIST' => 'Désabonnées',
  'LBL_UNSUBSCRIPTION_LIST_NAME' => 'Liste des Cibles "désabonnées" à la newsletter:',
  'LBL_UNSUBSCRIPTION_TARGET_WIZARD_DESC' => 'Les cibles de cette liste recevront PAS/PLUS les emails de la Newsletter.<br>Si vous ne spécifiez aucune liste, une liste vide sera créée automatiquement.',
  'LBL_UNSUBSCRIPTION_TYPE_NAME' => 'Désabonnés',
  'LBL_USERS_CANNOT_OPTOUT' => 'Les utilisateurs systèmes non pas le choix de se désinscrie à partir des emails qu&#39;ils recevront.',
  'LBL_USE_EXISTING' => 'Utiliser un existant',
  'LBL_VALID' => 'Valide',
  'LBL_VIEWED_SUBPANEL_TITLE' => 'Vues',
  'LBL_VIEW_INLINE' => 'Voir',
  'LBL_WEB_TO_LEAD' => 'Capture de Leads',
  'LBL_WEB_TO_LEAD_FORM_TITLE1' => 'Formulaire de Capture de Leads: Sélection des champs',
  'LBL_WEB_TO_LEAD_FORM_TITLE2' => 'Formulaire de Capture de Leads: Propriétés du formulaire',
  'LBL_WIZARD_BUDGET_MESSAGE' => 'Remplissez les informations suivantes relatives au budget de votre Campagne.<br>Ces informations seront utilisées pour calculer le Retour sur Investissement (ROI) de votre Campagne.',
  'LBL_WIZARD_FIRST_STEP_MESSAGE' => 'Vous ne pouvez pas revenir en arrière, vous êtes déjà à la première étape.',
  'LBL_WIZARD_HEADER_MESSAGE' => 'Remplissez les champs suivants qui identifieront votre Campagne',
  'LBL_WIZARD_LAST_STEP_MESSAGE' => 'Vous ne pouvez pas continuer, vous êtes à la dernière étape.',
  'LBL_WIZARD_MARKETING_MESSAGE' => 'Remplissez le formulaire suivant pour ajouter un nouveau Message à votre newsletter. Définissez aussi à partir de quand et comment votre newsletter sera envoyée.',
  'LBL_WIZARD_SENDMAIL_MESSAGE' => 'Vous êtes à la dernière étape. Choisissez si vous souhaitez envoyer un test, planifier l&#39;envoi de votre newsletter, ou simplement sauvegarder votre travail et aller au résumé de la Newsletter.',
  'LBL_WIZARD_SUBSCRIPTION_MESSAGE' => 'Une Newsletter doit avoir au moins trois "Listes de Cibles" définies. Vous pouvez utiliser des listes existantes ou laisser SugarCRM créer des listes vides automatiquement.',
  'LBL_WIZARD_TARGET_MESSAGE1' => 'Sélectionner ou créer une liste cible à utiliser dans votre campagne. Cette liste sera utilisé lors de l&#39;envoi de mails avec vos messages de campagnes.',
  'LBL_WIZARD_TARGET_MESSAGE2' => 'Ou créer une nouvelle liste en utilisant le formulaire suivant:',
  'LBL_WIZARD_TRACKER_MESSAGE' => 'Définissez ici les URLs des Trackers de votre Campagne. SugarCRM conservera l&#39;historique des clics sur ces URLs.<br><br><i>Les noms de Tracker ne doivent contenir que des lettres, des chiffres (pas au début) ou les caractères _ ou -.</i>',
  'LBL_WIZ_FROM_ADDRESS' => 'Email de l&#39;expéditeur:',
  'LBL_WIZ_FROM_NAME' => 'Nom de l&#39;expéditeur:',
  'LBL_WIZ_MARKETING_TITLE' => 'Message',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP1' => 'Identification',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP2' => 'Budget',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP3' => 'Tracker(s)',
  'LBL_WIZ_NEWSLETTER_TITLE_STEP4' => 'Cibles',
  'LBL_WIZ_NEWSLETTER_TITLE_SUMMARY' => 'Résumé',
  'LBL_WIZ_SENDMAIL_TITLE' => 'Envoi du Message',
  'LBL_WIZ_TEST_EMAIL_TITLE' => 'Test Email',
  'LBL_YEAR' => 'Année',
  'LBL_YES' => 'Oui',
  'LNK_CAMPAIGN_DIGNOSTIC_LINK' => 'La campagne ne peut pas fonctionner comme désiré et vos emails ne peuvent pas être envoyés pour les raisons suivantes:',
  'LNK_CAMPAIGN_LIST' => 'Campagnes',
  'LNK_EMAIL_TEMPLATE_LIST' => 'Modèles d&#39;email',
  'LNK_NEW_CAMPAIGN' => 'Nouvelle Campagne (Classique)',
  'LNK_NEW_EMAIL_TEMPLATE' => 'Nouveau Modèle d&#39;email',
  'LNK_NEW_PROSPECT' => 'Nouveau Suspect',
  'LNK_NEW_PROSPECT_LIST' => 'Nouvelle Liste de cibles',
  'LNK_PROSPECT_LIST' => 'Suspects',
  'LNK_PROSPECT_LIST_LIST' => 'Listes de cibles',
  'LNL_NEW_CAMPAIGN_WIZARD' => 'Nouvelle Campagne (Assistant)',
  'NTC_DELETE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
  'NTC_NO_LEGENDS' => 'Aucun',
  'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Valeur du paramètre site_url dans le fichier config.php',
);

