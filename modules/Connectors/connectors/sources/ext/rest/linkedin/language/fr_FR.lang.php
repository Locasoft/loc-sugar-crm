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
  'company_url' => 'URL',
  'LBL_LICENSING_INFO' => '<table border="0" cellspacing="1"><tr><td valign="top" width="35%" class="dataLabel">Les "Clé API" et "Code secret API" sont les paramètres que vous obtenez depuis LinkedIn&#169; en enregistrant votre instance SugarCRM comme une nouvelle application.<br/>Voici les étapes pour enregistrer votre instance:<br/><ol><li>Aller sur le site développeurs de LinkedIn&#169;: <a href="https://www.linkedin.com/secure/developer" target="_blank">https://www.linkedin.com/secure/developer</a>.</li><li>Enregistrez vous en utilisant le compte LinkedIn&#169; sur lequel vous souhaitez enregistrer votre application.</li><li>Cliquer sur le lien ajouter une nouvelle application.</li><li>Compléter le formulaire.</li><li>Accepter les CGV avec la case à cocher et cliquer sur Ajouter une application.</li><li>Vous trouverez les code API et clé secrète API pour le connecteur Linkedin&#169; (Admin – Connecteur - Linkedin&#169;) dans la page de détails de l&#39;application, entrer alors ceux-ci ci-dessous.</li><li>Cliquer sur Sauvegarder.</li></ol></td></tr></table>',
  'LBL_NAME' => 'Nom de la société',
  'oauth_consumer_key' => 'Clé API',
  'oauth_consumer_secret' => 'Code secret API',
);

