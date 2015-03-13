<?php
if (!defined('TYPO3_MODE')) {
	die('Access denied.');
}

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LS.' . $_EXTKEY,
	'Categories',
	array(
		'Category' => 'list, show',
		'Product' => 'list, show',
		'ProductDetail' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Category' => '',
		'Product' => '',
		'ProductDetail' => '',
		
	)
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
	'LS.' . $_EXTKEY,
	'Products',
	array(
		'Category' => 'list, show',
		'Product' => 'list, show',
		'ProductDetail' => 'list, show',
		
	),
	// non-cacheable actions
	array(
		'Category' => '',
		'Product' => '',
		'ProductDetail' => '',
		
	)
);
