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
 * Test case for class \LS\Shopware\Domain\Model\ProductPrice.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Marc Scherer <mail@loewenstall.de>
 */
class ProductPriceTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \LS\Shopware\Domain\Model\ProductPrice
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \LS\Shopware\Domain\Model\ProductPrice();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getBaseReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getBase()
		);
	}

	/**
	 * @test
	 */
	public function setBaseForStringSetsBase() {
		$this->subject->setBase('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'base',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPricefromReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPricefrom()
		);
	}

	/**
	 * @test
	 */
	public function setPricefromForStringSetsPricefrom() {
		$this->subject->setPricefrom('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pricefrom',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPricetoReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPriceto()
		);
	}

	/**
	 * @test
	 */
	public function setPricetoForStringSetsPriceto() {
		$this->subject->setPriceto('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'priceto',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForStringSetsPrice() {
		$this->subject->setPrice('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'price',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPricegroupReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPricegroup()
		);
	}

	/**
	 * @test
	 */
	public function setPricegroupForStringSetsPricegroup() {
		$this->subject->setPricegroup('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'pricegroup',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPercentReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getPercent()
		);
	}

	/**
	 * @test
	 */
	public function setPercentForStringSetsPercent() {
		$this->subject->setPercent('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'percent',
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
