<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_shopware_domain_model_productprice'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_shopware_domain_model_productprice']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, base, pricefrom, priceto, price, pricegroup, percent, product',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, base, pricefrom, priceto, price, pricegroup, percent, product, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
	),
	'palettes' => array(
		'1' => array('showitem' => ''),
	),
	'columns' => array(
	
		'sys_language_uid' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.language',
			'config' => array(
				'type' => 'select',
				'foreign_table' => 'sys_language',
				'foreign_table_where' => 'ORDER BY sys_language.title',
				'items' => array(
					array('LLL:EXT:lang/locallang_general.xlf:LGL.allLanguages', -1),
					array('LLL:EXT:lang/locallang_general.xlf:LGL.default_value', 0)
				),
			),
		),
		'l10n_parent' => array(
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.l18n_parent',
			'config' => array(
				'type' => 'select',
				'items' => array(
					array('', 0),
				),
				'foreign_table' => 'tx_shopware_domain_model_productprice',
				'foreign_table_where' => 'AND tx_shopware_domain_model_productprice.pid=###CURRENT_PID### AND tx_shopware_domain_model_productprice.sys_language_uid IN (-1,0)',
			),
		),
		'l10n_diffsource' => array(
			'config' => array(
				'type' => 'passthrough',
			),
		),

		't3ver_label' => array(
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.versionLabel',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'max' => 255,
			)
		),
	
		'hidden' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.hidden',
			'config' => array(
				'type' => 'check',
			),
		),
		'starttime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.starttime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),
		'endtime' => array(
			'exclude' => 1,
			'l10n_mode' => 'mergeIfNotBlank',
			'label' => 'LLL:EXT:lang/locallang_general.xlf:LGL.endtime',
			'config' => array(
				'type' => 'input',
				'size' => 13,
				'max' => 20,
				'eval' => 'datetime',
				'checkbox' => 0,
				'default' => 0,
				'range' => array(
					'lower' => mktime(0, 0, 0, date('m'), date('d'), date('Y'))
				),
			),
		),

		'base' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.base',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'pricefrom' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.pricefrom',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'priceto' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.priceto',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'price' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.price',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'pricegroup' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.pricegroup',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'percent' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.percent',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'product' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productprice.product',
			'config' => array(
				'type' => 'inline',
				'foreign_table' => 'tx_shopware_domain_model_product',
				'minitems' => 0,
				'maxitems' => 1,
				'appearance' => array(
					'collapseAll' => 0,
					'levelLinksPosition' => 'top',
					'showSynchronizationLink' => 1,
					'showPossibleLocalizationRecords' => 1,
					'showAllLocalizationLink' => 1
				),
			),
		),
		
	),
);
