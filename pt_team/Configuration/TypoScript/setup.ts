
tt_content.ptteam_feteam >
tt_content.ptteam_feteam = FLUIDTEMPLATE
tt_content.ptteam_feteam {

    templateName = Content
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
