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
 * ProductDetail
 */
class ProductDetail extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * active
	 *
	 * @var boolean
	 */
	protected $active = FALSE;

	/**
	 * ean
	 *
	 * @var string
	 */
	protected $ean = '';

	/**
	 * height
	 *
	 * @var string
	 */
	protected $height = '';

	/**
	 * width
	 *
	 * @var string
	 */
	protected $width = '';

	/**
	 * weight
	 *
	 * @var string
	 */
	protected $weight = '';

	/**
	 * ordernumber
	 *
	 * @var string
	 */
	protected $ordernumber = '';

	/**
	 * packunit
	 *
	 * @var string
	 */
	protected $packunit = '';

	/**
	 * minPurchase
	 *
	 * @var string
	 */
	protected $minPurchase = '';

	/**
	 * maxPurchase
	 *
	 * @var string
	 */
	protected $maxPurchase = '';

	/**
	 * product
	 *
	 * @var \LS\Shopware\Domain\Model\Product
	 */
	protected $product = NULL;

	/**
	 * Returns the active
	 *
	 * @return boolean $active
	 */
	public function getActive() {
		return $this->active;
	}

	/**
	 * Sets the active
	 *
	 * @param boolean $active
	 * @return void
	 */
	public function setActive($active) {
		$this->active = $active;
	}

	/**
	 * Returns the boolean state of active
	 *
	 * @return boolean
	 */
	public function isActive() {
		return $this->active;
	}

	/**
	 * Returns the ean
	 *
	 * @return string $ean
	 */
	public function getEan() {
		return $this->ean;
	}

	/**
	 * Sets the ean
	 *
	 * @param string $ean
	 * @return void
	 */
	public function setEan($ean) {
		$this->ean = $ean;
	}

	/**
	 * Returns the height
	 *
	 * @return string $height
	 */
	public function getHeight() {
		return $this->height;
	}

	/**
	 * Sets the height
	 *
	 * @param string $height
	 * @return void
	 */
	public function setHeight($height) {
		$this->height = $height;
	}

	/**
	 * Returns the width
	 *
	 * @return string $width
	 */
	public function getWidth() {
		return $this->width;
	}

	/**
	 * Sets the width
	 *
	 * @param string $width
	 * @return void
	 */
	public function setWidth($width) {
		$this->width = $width;
	}

	/**
	 * Returns the weight
	 *
	 * @return string $weight
	 */
	public function getWeight() {
		return $this->weight;
	}

	/**
	 * Sets the weight
	 *
	 * @param string $weight
	 * @return void
	 */
	public function setWeight($weight) {
		$this->weight = $weight;
	}

	/**
	 * Returns the ordernumber
	 *
	 * @return string $ordernumber
	 */
	public function getOrdernumber() {
		return $this->ordernumber;
	}

	/**
	 * Sets the ordernumber
	 *
	 * @param string $ordernumber
	 * @return void
	 */
	public function setOrdernumber($ordernumber) {
		$this->ordernumber = $ordernumber;
	}

	/**
	 * Returns the packunit
	 *
	 * @return string $packunit
	 */
	public function getPackunit() {
		return $this->packunit;
	}

	/**
	 * Sets the packunit
	 *
	 * @param string $packunit
	 * @return void
	 */
	public function setPackunit($packunit) {
		$this->packunit = $packunit;
	}

	/**
	 * Returns the minPurchase
	 *
	 * @return string $minPurchase
	 */
	public function getMinPurchase() {
		return $this->minPurchase;
	}

	/**
	 * Sets the minPurchase
	 *
	 * @param string $minPurchase
	 * @return void
	 */
	public function setMinPurchase($minPurchase) {
		$this->minPurchase = $minPurchase;
	}

	/**
	 * Returns the maxPurchase
	 *
	 * @return string $maxPurchase
	 */
	public function getMaxPurchase() {
		return $this->maxPurchase;
	}

	/**
	 * Sets the maxPurchase
	 *
	 * @param string $maxPurchase
	 * @return void
	 */
	public function setMaxPurchase($maxPurchase) {
		$this->maxPurchase = $maxPurchase;
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