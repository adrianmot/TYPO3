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
 * the categories
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * sid
	 *
	 * @var integer
	 */
	protected $sid = 0;

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * position
	 *
	 * @var integer
	 */
	protected $position = 0;

	/**
	 * image
	 *
	 * @var string
	 */
	protected $image = '';

	/**
	 * pleft
	 *
	 * @var integer
	 */
	protected $pleft = 0;

	/**
	 * pright
	 *
	 * @var integer
	 */
	protected $pright = 0;

	/**
	 * product
	 *
	 * @var integer
	 */
	protected $product = 0;

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
	 * Returns the position
	 *
	 * @return integer $position
	 */
	public function getPosition() {
		return $this->position;
	}

	/**
	 * Sets the position
	 *
	 * @param integer $position
	 * @return void
	 */
	public function setPosition($position) {
		$this->position = $position;
	}

	/**
	 * Returns the image
	 *
	 * @return string $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param string $image
	 * @return void
	 */
	public function setImage($image) {
		$this->image = $image;
	}

	/**
	 * Returns the pleft
	 *
	 * @return integer $pleft
	 */
	public function getPleft() {
		return $this->pleft;
	}

	/**
	 * Sets the pleft
	 *
	 * @param integer $pleft
	 * @return void
	 */
	public function setPleft($pleft) {
		$this->pleft = $pleft;
	}

	/**
	 * Returns the pright
	 *
	 * @return integer $pright
	 */
	public function getPright() {
		return $this->pright;
	}

	/**
	 * Sets the pright
	 *
	 * @param integer $pright
	 * @return void
	 */
	public function setPright($pright) {
		$this->pright = $pright;
	}

	/**
	 * Returns the product
	 *
	 * @return integer $product
	 */
	public function getProduct() {
		return $this->product;
	}

	/**
	 * Sets the product
	 *
	 * @param integer $product
	 * @return void
	 */
	public function setProduct($product) {
		$this->product = $product;
	}

}