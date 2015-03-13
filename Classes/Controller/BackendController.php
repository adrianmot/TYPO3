<?php
namespace LS\Shopware\Controller;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Marc Scherer <mail@loewenstall.de>, LÖWENSTALL
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * CategoryController
 */
class BackendController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * @var \LS\Shopware\Api\Client
	 */
	protected $client;

	/**
	 * categoryRepository
	 *
	 * @var \LS\Shopware\Domain\Repository\CategoryRepository
	 * @inject
	 */
	protected $categoryRepository = NULL;

	public function initializeAction() {
		$settings = array(
			'apiUrl' => 'http://shopware.marc.loc/api/',
			'username' => 'typo3',
			'apiKey' => 'kydelLtlnpgd1IcUPI06pxzmuvSBqaeynmzoEovO'
		);

		$this->client = $this->objectManager->get('LS\\Shopware\\Api\\Client');
		$this->client->initialize($settings);
	}

	/**
	 * action import
	 *
	 * @return void
	 */
	public function importAction() {
	}

	/**
	 * action update
	 *
	 * @return void
	 */
	public function updateAction() {
	}

}
