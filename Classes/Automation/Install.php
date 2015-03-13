<?php
namespace LS\Easytemplate\Automation;

/**
 * Class Install
 *
 * Called class to install (copy) all needed files to the fileadmin
 * @author marc scherer <mail@loewenstall.de>
 */

class Install {

	/**
	 * destination dir
	 * @var string
	 */
	public $dest;

	/**
	 * source dir
	 * @var string
	 */
	public $source;

	/**
     * Initialize function
	 * starts the installer
     */
	public function InitializeInstaller($extname = null) {
		if ($extname !== 'easytemplate') {
            return;
        }

		$this->dest = $_SERVER['DOCUMENT_ROOT'] . '/fileadmin/easytemplate/';
		$this->source = $_SERVER['DOCUMENT_ROOT'] . '/typo3conf/ext/easytemplate/Resources/Fileadmin/easytemplate/';

		$this->copyTemplateStructure();
		$this->copySassConfig();
	}

	/**
	 * copy template files to fileadmin
	 */
	public function copyTemplateStructure() {
		if (!is_dir($this->dest)) {
			@mkdir($this->dest, 0755);
		}

		$iterator = new \RecursiveIteratorIterator(new \RecursiveDirectoryIterator($this->source, \RecursiveDirectoryIterator::SKIP_DOTS), \RecursiveIteratorIterator::SELF_FIRST);

		foreach ($iterator as $item) {
			if ($item->isDir()) {
				@mkdir($this->dest . '/' . $iterator->getSubPathName());
			} else {
				@copy($item, $this->dest . '/' . $iterator->getSubPathName());
			}
		}
	}

	public function copySassConfig() {
		copy($_SERVER['DOCUMENT_ROOT'] . '/typo3conf/ext/easytemplate/Resources/Private/config.rb', $_SERVER['DOCUMENT_ROOT'] . '/config.rb');
	}
}
