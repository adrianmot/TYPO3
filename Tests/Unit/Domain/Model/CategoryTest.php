<?php

namespace LS\Shopware\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Marc Scherer <mail@loewenstall.de>, LÖWENSTALL
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \LS\Shopware\Domain\Model\Category.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Marc Scherer <mail@loewenstall.de>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \LS\Shopware\Domain\Model\Category
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \LS\Shopware\Domain\Model\Category();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getSidReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getSid()
		);
	}

	/**
	 * @test
	 */
	public function setSidForIntegerSetsSid() {
		$this->subject->setSid(12);

		$this->assertAttributeEquals(
			12,
			'sid',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPositionReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPosition()
		);
	}

	/**
	 * @test
	 */
	public function setPositionForIntegerSetsPosition() {
		$this->subject->setPosition(12);

		$this->assertAttributeEquals(
			12,
			'position',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForStringSetsImage() {
		$this->subject->setImage('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPleftReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPleft()
		);
	}

	/**
	 * @test
	 */
	public function setPleftForIntegerSetsPleft() {
		$this->subject->setPleft(12);

		$this->assertAttributeEquals(
			12,
			'pleft',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPrightReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPright()
		);
	}

	/**
	 * @test
	 */
	public function setPrightForIntegerSetsPright() {
		$this->subject->setPright(12);

		$this->assertAttributeEquals(
			12,
			'pright',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProductReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getProduct()
		);
	}

	/**
	 * @test
	 */
	public function setProductForIntegerSetsProduct() {
		$this->subject->setProduct(12);

		$this->assertAttributeEquals(
			12,
			'product',
			$this->subject
		);
	}
}
