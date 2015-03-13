<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

// add static ts template & tsconfig
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'Easy FLUID Page Template');
TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:easytemplate/Configuration/TSconfig/Default.ts">');
