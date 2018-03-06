<?php

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPlugin(
   array(
   	  'LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:title',
      'ptteam_feteam',
      'EXT:pt_team/Resources/Public/Icons/Backend/user-icon.svg'
   ),
   'CType',
   'ptteam_feteam'
);

$customFields = [

    'email' => [
        'exclude' => false,
        'label' => 'E-Mail',
        'config' => [
		    'type' => 'input',
		    'size' => 30,
		    'eval' => 'trim'
		],
    ],
    'phone' => [
        'exclude' => false,
        'label' => 'Telefon',
        'config' => [
		    'type' => 'input',
		    'size' => 30,
		    'eval' => 'trim'
		],
    ],
	
	'bodytext' => [
		'exclude' => false,
		'l10n_mode' => 'prefixLangTitle',
		'label' => 'LLL:EXT:lang/Resources/Private/Language/locallang_general.xlf:LGL.text',
		'config' => [
			'type' => 'text',
			'cols' => 40,
			'rows' => 6,
			'enableRichtext' => true
		]
	],
];

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addTCAcolumns('tt_content',$customFields);

$GLOBALS['TCA']['tt_content']['types']['ptteam_feteam'] = array(
   'showitem' => '
        --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.general;general,
		
	    image;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:photo,
        header;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:header,
        subheader;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:position,
		email;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:email,
		phone;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:phone,
		bodytext;LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:description,
		
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.appearance,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.frames;frames,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.access,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.visibility;visibility,
         --palette--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:palette.access;access,
      --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xml:tabs.extended
');


?>