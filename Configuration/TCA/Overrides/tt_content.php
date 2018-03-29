<?php
defined('TYPO3_MODE') or die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
	'FFREWER.frsupersized',
	'Pi1',
	'Supersized'
);

$extensionName = \TYPO3\CMS\Core\Utility\GeneralUtility::underscoredToUpperCamelCase('frsupersized');
$pluginSignature = strtolower($extensionName) . '_pi1';

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist'][$pluginSignature] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue($pluginSignature, 
				'FILE:EXT:frsupersized/Configuration/FlexForms/flexform_supersized.xml');

// eliminates the fields Plugin Mode & Record Storage Page on tab Behavior
$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_excludelist']['frsupersized_pi1'] = 'layout,select_key, pages,recursive';

