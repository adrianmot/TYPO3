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
 * ProductDetailController
 */
class ProductDetailController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController {

	/**
	 * action list
	 *
	 * @return void
	 */
	public function listAction() {
		$productDetails = $this->productDetailRepository->findAll();
		$this->view->assign('productDetails', $productDetails);
	}

	/**
	 * action show
	 *
	 * @param \LS\Shopware\Domain\Model\ProductDetail $productDetail
	 * @return void
	 */
	public function showAction(\LS\Shopware\Domain\Model\ProductDetail $productDetail) {
		$this->view->assign('productDetail', $productDetail);
	}

}