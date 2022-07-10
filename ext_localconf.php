<?php
/*
 #---------------------------------------------------------------
 # ext_localconf file for ext sitepackage
 #
 # Generated 01.06.2020 by conPassione gmbh
 #---------------------------------------------------------------
*/

if (!defined('TYPO3_MODE')) {
    die ('Access denied.');
}

// Vorberitung Konfiguration
// $extConf = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Configuration\ExtensionConfiguration::class)->get('cp_institut');


// Typoscript konfigurieren
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('
	@import "EXT:cp_institut/Configuration/TSconfig/Page/setup.tsconfig"
');

\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addUserTSConfig('
        @import "EXT:cp_institut/Configuration/TSconfig/User/DefaultUser.tsconfig">
');

// Fluid Components konfigurieren
$GLOBALS['TYPO3_CONF_VARS']['EXTCONF']['fluid_components']['namespaces']['Cp\\CpInstitut\\Components'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath('cp_institut', 'Resources/Private/Components');


$GLOBALS['TYPO3_CONF_VARS']['SYS']['fluid']['namespaces']['cfcl'] = ['Cp\CpInstitut\Components'];

// CK-Editor Konfiguration laden
if (empty($GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cplayout'])) {
    $GLOBALS['TYPO3_CONF_VARS']['RTE']['Presets']['cplayout'] = 'EXT:cp_institut/Configuration/RTE/CpLayout.yaml';
}

// In cp_institut verwendete Icons laden
//$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);

// $iconRegistry->registerIcon(
// 	'cp-ge5050',
// 	\TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
// 	['source' => 'EXT:cp_base/Resources/Public/Icons/ge5050.svg']
// );

?>
