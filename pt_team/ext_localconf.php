<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
    function($extKey)
	{

        \TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
            'Veteam.PtTeam',
            'Feteam',
            [
                
            ],
            // non-cacheable actions
            [
                
            ]
        );
		
	if (TYPO3_MODE === 'BE') {
		/** @var \TYPO3\CMS\Core\Imaging\IconRegistry $iconRegistry */
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		$iconRegistry->registerIcon(
			'ptteam_feteam',
			\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
			['source' => 'EXT:pt_team/Resources/Public/Icons/Backend/user-icon.svg']
		);
	}

	// wizards
	\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
	  'mod.wizards.newContentElement.wizardItems.common {
		elements {
		  ptteam_feteam {
			  iconIdentifier = ptteam_feteam
			  title = LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:tx_pt_team_domain_model_feteam
			  description = LLL:EXT:pt_team/Resources/Private/Language/locallang_db.xlf:tx_pt_team_domain_model_feteam.description
			  tt_content_defValues {
			  CType = ptteam_feteam
			}
		  }
		}
		show := addToList(ptteam_feteam)
	  }'
	);
    },
    $_EXTKEY
);
