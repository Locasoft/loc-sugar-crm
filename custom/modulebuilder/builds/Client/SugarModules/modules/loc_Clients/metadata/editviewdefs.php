<?php
$module_name = 'loc_Clients';
$_object_name = 'loc_clients';
$viewdefs [$module_name] = 
array (
  'EditView' => 
  array (
    'templateMeta' => 
    array (
      'form' => 
      array (
        'buttons' => 
        array (
          0 => 'SAVE',
          1 => 'CANCEL',
        ),
      ),
      'maxColumns' => '2',
      'widths' => 
      array (
        0 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
        1 => 
        array (
          'label' => '10',
          'field' => '30',
        ),
      ),
      'includes' => 
      array (
        0 => 
        array (
          'file' => 'modules/Accounts/Account.js',
        ),
      ),
      'useTabs' => false,
      'tabDefs' => 
      array (
        'LBL_EDITVIEW_PANEL1' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ACCOUNT_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_ADDRESS_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_EMAIL_ADDRESSES' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_DESCRIPTION_INFORMATION' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
      ),
    ),
    'panels' => 
    array (
      'lbl_editview_panel1' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'adresse',
            'label' => 'LBL_ADRESSE',
          ),
          1 => 
          array (
            'name' => 'cp',
            'label' => 'LBL_CP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'echeance',
            'label' => 'LBL_ECHEANCE',
          ),
          1 => 
          array (
            'name' => 'fax',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'libelle_nterne',
            'label' => 'LBL_LIBELLE_NTERNE',
          ),
          1 => 
          array (
            'name' => 'mail',
            'label' => 'LBL_MAIL',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'code_compta',
            'label' => 'LBL_CODE_COMPTA',
          ),
          1 => 
          array (
            'name' => 'portable',
            'label' => 'LBL_PORTABLE',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'raison_sociale',
            'label' => 'LBL_RAISON_SOCIALE',
          ),
          1 => 
          array (
            'name' => 'responsable',
            'label' => 'LBL_RESPONSABLE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'ville',
            'label' => 'LBL_VILLE',
          ),
          1 => 
          array (
            'name' => 'sigle',
            'label' => 'LBL_SIGLE',
          ),
        ),
        6 => 
        array (
          0 => '',
          1 => '',
        ),
      ),
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 'name',
          1 => 'phone_office',
        ),
        1 => 
        array (
          0 => 'website',
          1 => 'phone_fax',
        ),
        2 => 
        array (
          0 => 'ticker_symbol',
          1 => 'phone_alternate',
        ),
        3 => 
        array (
          0 => 'rating',
          1 => 'employees',
        ),
        4 => 
        array (
          0 => 'ownership',
          1 => 'industry',
        ),
        5 => 
        array (
          0 => 'loc_clients_type',
          1 => 'annual_revenue',
        ),
        6 => 
        array (
          0 => 'assigned_user_name',
        ),
      ),
      'lbl_address_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'billing_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
          1 => 
          array (
            'name' => 'shipping_address_street',
            'hideLabel' => true,
            'type' => 'address',
            'displayParams' => 
            array (
              'key' => 'shipping',
              'copy' => 'billing',
              'rows' => 2,
              'cols' => 30,
              'maxlength' => 150,
            ),
          ),
        ),
      ),
      'lbl_email_addresses' => 
      array (
        0 => 
        array (
          0 => 'email1',
        ),
      ),
      'lbl_description_information' => 
      array (
        0 => 
        array (
          0 => 'description',
        ),
      ),
    ),
  ),
);
?>
