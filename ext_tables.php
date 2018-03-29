<?php
if (!defined ('TYPO3_MODE')) die ('Access denied.');

/* moved to Configuration/TCA/Overrides/ tt_content or sys_template if TYPO3 8.7 */
if (TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) < TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger( '8.7' ) ) {

    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'FFREWER.' . $_EXTKEY,
        'Pi1',
        'Supersized'
    );

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Supersized');

    $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
    $pluginSignature = strtolower($extensionName) . '_pi1';
    // does this work in TYPO3 7.6 ? should be $GLOBALS ??
    $TCA['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_supersized.xml');


// eliminates the fields Plugin Mode & Record Storage Page on tab Behavior
    $TCA['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY.'_pi1']  ='layout,select_key, pages,recursive';

}



if (TYPO3_MODE == 'BE') {
	// add wizicon to 'add content element'
	$GLOBALS['TBE_MODULES_EXT']['xMOD_db_new_content_el']['addElClasses']['FFREWER\Frsupersized\Utility\WizardIcon'] = \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Utility/WizardIcon.php';
	// TCEForms user functions
	include_once(\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::extPath($_EXTKEY) . 'Classes/Utility/TceFunc.php');
}
