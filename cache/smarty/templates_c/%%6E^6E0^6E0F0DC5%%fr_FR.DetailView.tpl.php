<?php /* Smarty version 2.6.11, created on 2016-01-28 08:47:40
         compiled from include/SugarFields/Fields/Address/fr_FR.DetailView.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugarvar_connector', 'include/SugarFields/Fields/Address/fr_FR.DetailView.tpl', 42, false),)), $this); ?>
{*
/*********************************************************************************
 * The contents of this file are subject to the SugarCRM Professional Subscription
 * Agreement ("License") which can be viewed at
 * http://www.sugarcrm.com/crm/products/sugar-professional-eula.html
 * By installing or using this file, You have unconditionally agreed to the
 * terms and conditions of the License, and You may not use this file except in
 * compliance with the License.  Under the terms of the license, You shall not,
 * among other things: 1) sublicense, resell, rent, lease, redistribute, assign
 * or otherwise transfer Your rights to the Software, and 2) use the Software
 * for timesharing or service bureau purposes such as hosting the Software for
 * commercial gain and/or for the benefit of a third party.  Use of the Software
 * may be subject to applicable fees and any use of the Software without first
 * paying applicable fees is strictly prohibited.  You do not have the right to
 * remove SugarCRM copyrights from the source code or user interface.
 *
 * All copies of the Covered Code must include on each user interface screen:
 *  (i) the "Powered by SugarCRM" logo and
 *  (ii) the SugarCRM copyright notice
 * in the same form as they appear in the distribution.  See full license for
 * requirements.
 *
 * Your Warranty, Limitations of liability and Indemnity are expressly stated
 * in the License.  Please refer to the License for the specific language
 * governing these rights and limitations under the License.  Portions created
 * by SugarCRM are Copyright (C) 2004-2010 SugarCRM, Inc.; All Rights Reserved.
 ********************************************************************************/
*}
<table border='0' cellpadding='0' cellspacing='0' width='100%'>
<tr>
<td width='99%' >
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
<input type="hidden" class="sugar_field" id="<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode" value="{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}">
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_street.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_postalcode.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_city.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}<br>
{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_state.value|escape:'htmlentitydecode'|strip_tags|url2html|nl2br}&nbsp;{$fields.<?php echo $this->_tpl_vars['displayParams']['key']; ?>
_address_country.value|escape:'htmlentitydecode'|escape:'html'|url2html|nl2br}
</td>
<?php if (! empty ( $this->_tpl_vars['displayParams']['enableConnectors'] )): ?>
<td class="dataField">
<?php echo smarty_function_sugarvar_connector(array('view' => 'DetailView'), $this);?>
 
</td>
<?php endif; ?>
<td class='dataField' width='1%'>
{$custom_code_<?php echo $this->_tpl_vars['displayParams']['key']; ?>
}
</td>
</tr>
</table>