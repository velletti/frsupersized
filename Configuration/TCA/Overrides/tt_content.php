<?php
defined('TYPO3_MODE') or die();
$_EXTKEY = 'frsupersized' ;


/* moved from ext_tables.php to here : Configuration/TCA/Overrides/ tt_content or sys_template if TYPO3 8.7 */
if (TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) >= TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger( '8.7' ) ) {
    \TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
        'FFREWER.' . $_EXTKEY,
        'Pi1',
        'Supersized'
    );

    $extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase($_EXTKEY);
    $pluginSignature = strtolower($extensionName) . '_pi1';

    // TYPO3 8.7. changed from $TCA[.. to $GLOBALS['TCA']
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 'FILE:EXT:' . $_EXTKEY . '/Configuration/FlexForms/flexform_supersized.xml');

    // TYPO3 8.7. changed from $TCA[.. to $GLOBALS['TCA']
// eliminates the fields Plugin Mode & Record Storage Page on tab Behavior
    $GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist'][$_EXTKEY . '_pi1'] = 'layout,select_key, pages,recursive';

}