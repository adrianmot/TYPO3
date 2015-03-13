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
 * Test case for class \LS\Shopware\Domain\Model\ProductDetail.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Marc Scherer <mail@loewenstall.de>
 */
class ProductDetailTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \LS\Shopware\Domain\Model\ProductDetail
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \LS\Shopware\Domain\Model\ProductDetail();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getActiveReturnsInitialValueForBoolean() {
		$this->assertSame(
			FALSE,
			$this->subject->getActive()
		);
	}

	/**
	 * @test
	 */
	public function setActiveForBooleanSetsActive() {
		$this->subject->setActive(TRUE);

		$this->assertAttributeEquals(
			TRUE,
			'active',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEanReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEan()
		);
	}

	/**
	 * @test
	 */
	public function setEanForStringSetsEan() {
		$this->subject->setEan('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ean',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHeightReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHeight()
		);
	}

	/**
	 * @test
	 */
	public function setHeightForStringSetsHeight() {
		$this->subject->setHeight('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'height',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWidthReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWidth()
		);
	}

	/**
	 * @test
	 */
	public function setWidthForStringSetsWidth() {
		$this->subject->setWidth('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'width',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getWeightReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getWeight()
		);
	}

	/**
	 * @test
	 */
	public function setWeightForStringSetsWeight() {
		$this->subject->setWeight('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'weight',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getOrdernumberReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getOrdernumber()
		);
	}

	/**
	 * @test
	 */
	public function setOrdernumberForStringSetsOrdernumber() {
		$this->subject->setOrdernumber('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'ordernumber',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPackunitReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPackunit()
		);
	}

	/**
	 * @test
	 */
	public function setPackunitForStringSetsPackunit() {
		$this->subject->setPackunit('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'packunit',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMinPurchaseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMinPurchase()
		);
	}

	/**
	 * @test
	 */
	public function setMinPurchaseForStringSetsMinPurchase() {
		$this->subject->setMinPurchase('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'minPurchase',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getMaxPurchaseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMaxPurchase()
		);
	}

	/**
	 * @test
	 */
	public function setMaxPurchaseForStringSetsMaxPurchase() {
		$this->subject->setMaxPurchase('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'maxPurchase',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getProductReturnsInitialValueForProduct() {
		$this->assertEquals(
			NULL,
			$this->subject->getProduct()
		);
	}

	/**
	 * @test
	 */
	public function setProductForProductSetsProduct() {
		$productFixture = new \LS\Shopware\Domain\Model\Product();
		$this->subject->setProduct($productFixture);

		$this->assertAttributeEquals(
			$productFixture,
			'product',
			$this->subject
		);
	}
}
