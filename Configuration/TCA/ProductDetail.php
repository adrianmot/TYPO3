<?php
if (!defined ('TYPO3_MODE')) {
	die ('Access denied.');
}

$GLOBALS['TCA']['tx_shopware_domain_model_productdetail'] = array(
	'ctrl' => $GLOBALS['TCA']['tx_shopware_domain_model_productdetail']['ctrl'],
	'interface' => array(
		'showRecordFieldList' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, active, ean, height, width, weight, ordernumber, packunit, min_purchase, max_purchase, product',
	),
	'types' => array(
		'1' => array('showitem' => 'sys_language_uid;;;;1-1-1, l10n_parent, l10n_diffsource, hidden;;1, active, ean, height, width, weight, ordernumber, packunit, min_purchase, max_purchase, product, --div--;LLL:EXT:cms/locallang_ttc.xlf:tabs.access, starttime, endtime'),
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
				'foreign_table' => 'tx_shopware_domain_model_productdetail',
				'foreign_table_where' => 'AND tx_shopware_domain_model_productdetail.pid=###CURRENT_PID### AND tx_shopware_domain_model_productdetail.sys_language_uid IN (-1,0)',
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

		'active' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.active',
			'config' => array(
				'type' => 'check',
				'default' => 0
			)
		),
		'ean' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.ean',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'height' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.height',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'width' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.width',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'weight' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.weight',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'ordernumber' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.ordernumber',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'packunit' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.packunit',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'min_purchase' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.min_purchase',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'max_purchase' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.max_purchase',
			'config' => array(
				'type' => 'input',
				'size' => 30,
				'eval' => 'trim'
			),
		),
		'product' => array(
			'exclude' => 1,
			'label' => 'LLL:EXT:shopware/Resources/Private/Language/locallang_db.xlf:tx_shopware_domain_model_productdetail.product',
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
