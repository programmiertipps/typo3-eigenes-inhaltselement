
plugin.tx_ptteam_feteam {
  view {
    # cat=plugin.tx_ptteam_feteam/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:pt_team/Resources/Private/Templates/
    # cat=plugin.tx_ptteam_feteam/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:pt_team/Resources/Private/Partials/
    # cat=plugin.tx_ptteam_feteam/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:pt_team/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_ptteam_feteam//a; type=string; label=Default storage PID
    storagePid =
  }
}
