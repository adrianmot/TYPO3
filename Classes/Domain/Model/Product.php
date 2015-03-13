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
 * the products
 */
class Product extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * sid
	 *
	 * @var integer
	 */
	protected $sid = 0;

	/**
	 * name
	 *
	 * @var string
	 */
	protected $name = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * descriptionLong
	 *
	 * @var string
	 */
	protected $descriptionLong = '';

	/**
	 * shippingtime
	 *
	 * @var string
	 */
	protected $shippingtime = '';

	/**
	 * detail
	 *
	 * @var integer
	 */
	protected $detail = 0;

	/**
	 * price
	 *
	 * @var integer
	 */
	protected $price = 0;

	/**
	 * category
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Category>
	 */
	protected $category = NULL;

	/**
	 * related
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Product>
	 * @cascade remove
	 */
	protected $related = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->category = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->related = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the sid
	 *
	 * @return integer $sid
	 */
	public function getSid() {
		return $this->sid;
	}

	/**
	 * Sets the sid
	 *
	 * @param integer $sid
	 * @return void
	 */
	public function setSid($sid) {
		$this->sid = $sid;
	}

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the descriptionLong
	 *
	 * @return string $descriptionLong
	 */
	public function getDescriptionLong() {
		return $this->descriptionLong;
	}

	/**
	 * Sets the descriptionLong
	 *
	 * @param string $descriptionLong
	 * @return void
	 */
	public function setDescriptionLong($descriptionLong) {
		$this->descriptionLong = $descriptionLong;
	}

	/**
	 * Returns the shippingtime
	 *
	 * @return string $shippingtime
	 */
	public function getShippingtime() {
		return $this->shippingtime;
	}

	/**
	 * Sets the shippingtime
	 *
	 * @param string $shippingtime
	 * @return void
	 */
	public function setShippingtime($shippingtime) {
		$this->shippingtime = $shippingtime;
	}

	/**
	 * Returns the detail
	 *
	 * @return integer $detail
	 */
	public function getDetail() {
		return $this->detail;
	}

	/**
	 * Sets the detail
	 *
	 * @param integer $detail
	 * @return void
	 */
	public function setDetail($detail) {
		$this->detail = $detail;
	}

	/**
	 * Returns the price
	 *
	 * @return integer $price
	 */
	public function getPrice() {
		return $this->price;
	}

	/**
	 * Sets the price
	 *
	 * @param integer $price
	 * @return void
	 */
	public function setPrice($price) {
		$this->price = $price;
	}

	/**
	 * Adds a Category
	 *
	 * @param \LS\Shopware\Domain\Model\Category $category
	 * @return void
	 */
	public function addCategory(\LS\Shopware\Domain\Model\Category $category) {
		$this->category->attach($category);
	}

	/**
	 * Removes a Category
	 *
	 * @param \LS\Shopware\Domain\Model\Category $categoryToRemove The Category to be removed
	 * @return void
	 */
	public function removeCategory(\LS\Shopware\Domain\Model\Category $categoryToRemove) {
		$this->category->detach($categoryToRemove);
	}

	/**
	 * Returns the category
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Category> $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Category> $category
	 * @return void
	 */
	public function setCategory(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $category) {
		$this->category = $category;
	}

	/**
	 * Adds a Product
	 *
	 * @param \LS\Shopware\Domain\Model\Product $related
	 * @return void
	 */
	public function addRelated(\LS\Shopware\Domain\Model\Product $related) {
		$this->related->attach($related);
	}

	/**
	 * Removes a Product
	 *
	 * @param \LS\Shopware\Domain\Model\Product $relatedToRemove The Product to be removed
	 * @return void
	 */
	public function removeRelated(\LS\Shopware\Domain\Model\Product $relatedToRemove) {
		$this->related->detach($relatedToRemove);
	}

	/**
	 * Returns the related
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Product> $related
	 */
	public function getRelated() {
		return $this->related;
	}

	/**
	 * Sets the related
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\LS\Shopware\Domain\Model\Product> $related
	 * @return void
	 */
	public function setRelated(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $related) {
		$this->related = $related;
	}

}