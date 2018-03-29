<?php
defined('TYPO3_MODE') or die();

/* moved from ext_tables.php to here : Configuration/TCA/Overrides/ tt_content or sys_template if TYPO 8.7 */
if (TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger(TYPO3_branch) >= TYPO3\CMS\Core\Utility\VersionNumberUtility::convertVersionNumberToInteger( '8.7' ) ) {
    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile('frsupersized', 'Configuration/TypoScript', 'Supersized');
}
