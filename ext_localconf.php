<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

if (defined('TYPO3_MODE') && TYPO3_MODE === 'BE') {
	/** @var $dispatcher \TYPO3\CMS\Extbase\SignalSlot\Dispatcher */
	$dispatcher = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance('TYPO3\\CMS\\Extbase\\SignalSlot\\Dispatcher');
    $dispatcher->connect(
        'TYPO3\\CMS\\Extensionmanager\\Service\\ExtensionManagementService',
        'hasInstalledExtensions',
        'LS\\Easytemplate\\Automation\\Install',
        'InitializeInstaller'
    );
}

if (TYPO3_MODE === 'BE') {
	// register FileProvider (using DataProvider) for outsourced backend layouts (be_layout)
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutDataProvider']['file'] = 'LS\\Easytemplate\\Provider\\BackendLayoutDataProvider';
	$GLOBALS['TYPO3_CONF_VARS']['SC_OPTIONS']['BackendLayoutFileProvider']['dir'][] = 'fileadmin/easytemplate/Resources/Private/BackendLayouts/';
}
