<?php
if (!defined ('TYPO3_MODE')) 	die ('Access denied.');
$_EXTKEY = 'frsupersized' ;

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'FFREWER.' . $_EXTKEY,
	'Pi1',
	array(
		'Supersized' => 'index',
	),
	array(
		'Supersized' => '',
	)
);
