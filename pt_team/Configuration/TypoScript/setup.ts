
tt_content.ptteam_feteam >
tt_content.ptteam_feteam = FLUIDTEMPLATE
tt_content.ptteam_feteam {

    templateName = Content
	
	dataProcessing.10 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
	dataProcessing.10 {
		references {
			fieldName = image
			table = tt_content
		}
		as = images
	}
	
    templateRootPaths {
        0 = EXT:pt_team/Resources/Private/Templates/
		10 = {$plugin.tx_ptteam_feteam.view.templateRootPath}
    }
    partialRootPaths {
        0 = EXT:pt_team/Resources/Private/Partials/
		10 = {$plugin.tx_ptteam_feteam.view.partialRootPath}
    }
    layoutRootPaths {
        0 = EXT:pt_team/Resources/Private/Layouts/
		10 = {$plugin.tx_ptteam_feteam.view.layoutRootPath}
    }

}
