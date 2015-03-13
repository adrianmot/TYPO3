<?php
namespace LS\Shopware\Domain\Model;


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
 * ProductPrice
 */
class ProductPrice extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * base
	 *
	 * @var string
	 */
	protected $base = '';

	/**
	 * pricefrom
	 *
	 * @var string
	 */
	protected $pricefrom = '';

	/**
	 * priceto
	 *
	 * @var string
	 */
	protected $priceto = '';

	/**
	 * price
	 *
	 * @var string
	 */
	protected $price = '';

	/**
	 * pricegroup
	 *
	 * @var string
	 */
	protected $pricegroup = '';

	/**
	 * percent
	 *
	 * @var string
	 */
	protected $percent = '';

	/**
	 * product
	 *
	 * @var \LS\Shopware\Domain\Model\Product
	 */
	protected $product = NULL;

	/**
	 * Returns the base
	 *
	 * @return string $base
	 */
	public function getBase() {
		return $this->base;
	}

	/**
	 * Sets the base
	 *
	 * @param string $base
	 * @return void
	 */
	public function setBase($base) {
		$this->base = $base;
	}

	/**
	 * Returns the pricefrom
	 *
	 * @return string $pricefrom
	 */
	public function getPricefrom() {
		return $this->pricefrom;
	}

	/**
	 * Sets the pricefrom
	 *
	 * @param string $pricefrom
	 * @return void
	 */
	public function setPricefrom($pricefrom) {
		$this->pricefrom = $pricefrom;
	}

	/**
	 * Returns the priceto
	 *
	 * @return string $priceto
	 */
	public function getPriceto() {
		return $this->priceto;
	}

	/**
	 * Sets the priceto
	 *
	 * @param string $priceto
	 * @return void
	 */
	public function setPriceto($priceto) {
		$this->priceto = $priceto;
	}

	/**
	 * Returns the price
	 *
	 * @return string $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param string $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Returns the pricegroup
	 *
	 * @return string $pricegroup
	 */
	public function getPricegroup() {
		return $this->pricegroup;
	}

	/**
	 * Sets the pricegroup
	 *
	 * @param string $pricegroup
	 * @return void
	 */
	public function setPricegroup($pricegroup) {
		$this->pricegroup = $pricegroup;
	}

	/**
	 * Returns the percent
	 *
	 * @return string $percent
	 */
	public function getPercent() {
		return $this->percent;
	}

	/**
	 * Sets the percent
	 *
	 * @param string $percent
	 * @return void
	 */
	public function setPercent($percent) {
		$this->percent = $percent;
	}

	/**
	 * Returns the product
	 *
	 * @return \LS\Shopware\Domain\Model\Product $product
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets the product
	 *
	 * @param \LS\Shopware\Domain\Model\Product $product
	 * @return void
	 */
	public function setProduct(\LS\Shopware\Domain\Model\Product $product) {
		$this->product = $product;
	}

}