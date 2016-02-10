<?php
$viewdefs ['Accounts'] = 
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
        'LBL_PANEL_ADVANCED' => 
        array (
          'newTab' => false,
          'panelDefault' => 'expanded',
        ),
        'LBL_PANEL_ASSIGNMENT' => 
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
            'name' => 'raison_sociale_c',
            'label' => 'LBL_RAISON_SOCIALE',
          ),
          1 => 
          array (
            'name' => 'cp_c',
            'label' => 'LBL_CP',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'echeance_c',
            'label' => 'LBL_ECHEANCE',
          ),
          1 => 
          array (
            'name' => 'fax_c',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
        array (
          0 => 
          array (
            'name' => 'responsable_c',
            'label' => 'LBL_RESPONSABLE',
          ),
          1 => 
          array (
            'name' => 'portable_c',
            'label' => 'LBL_PORTABLE',
          ),
        ),
        3 => 
        array (
          0 => 
          array (
            'name' => 'ville_c',
            'label' => 'LBL_VILLE',
          ),
          1 => 
          array (
            'name' => 'mail_c',
            'label' => 'LBL_MAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'sigle_c',
            'label' => 'LBL_SIGLE',
          ),
          1 => 
          array (
            'name' => 'telephone_c',
            'label' => 'LBL_TELEPHONE',
          ),
        ),
        5 => 
        array (
          0 => 
          array (
            'name' => 'libelle_interne_c',
            'label' => 'LBL_LIBELLE_INTERNE',
          ),
          1 => 
          array (
            'name' => 'adresse_c',
            'label' => 'LBL_ADRESSE',
          ),
        ),
      ),
      'lbl_account_information' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'name',
            'label' => 'LBL_NAME',
            'displayParams' => 
            array (
              'required' => true,
            ),
          ),
          1 => 
          array (
            'name' => 'phone_office',
            'label' => 'LBL_PHONE_OFFICE',
          ),
        ),
        1 => 
        array (
          0 => 
          array (
            'name' => 'website',
            'type' => 'link',
            'label' => 'LBL_WEBSITE',
          ),
          1 => 
          array (
            'name' => 'phone_fax',
            'label' => 'LBL_FAX',
          ),
        ),
        2 => 
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
        3 => 
        array (
          0 => 
          array (
            'name' => 'email1',
            'studio' => 'false',
            'label' => 'LBL_EMAIL',
          ),
        ),
        4 => 
        array (
          0 => 
          array (
            'name' => 'description',
            'label' => 'LBL_DESCRIPTION',
          ),
        ),
      ),
      'LBL_PANEL_ADVANCED' => 
      array (
        0 => 
        array (
          0 => 'account_type',
          1 => 'industry',
        ),
        1 => 
        array (
          0 => 'annual_revenue',
          1 => 'employees',
        ),
        2 => 
        array (
          0 => 'sic_code',
          1 => 'ticker_symbol',
        ),
        3 => 
        array (
          0 => 'parent_name',
          1 => 'ownership',
        ),
        4 => 
        array (
          0 => 'campaign_name',
          1 => 'rating',
        ),
      ),
      'LBL_PANEL_ASSIGNMENT' => 
      array (
        0 => 
        array (
          0 => 
          array (
            'name' => 'assigned_user_name',
            'label' => 'LBL_ASSIGNED_TO',
          ),
        ),
      ),
    ),
  ),
);
?>
