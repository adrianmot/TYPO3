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
 * Test case for class \LS\Shopware\Domain\Model\Product.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Marc Scherer <mail@loewenstall.de>
 */
class ProductTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \LS\Shopware\Domain\Model\Product
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \LS\Shopware\Domain\Model\Product();
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
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
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
	public function getDescriptionLongReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescriptionLong()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionLongForStringSetsDescriptionLong() {
		$this->subject->setDescriptionLong('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'descriptionLong',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getShippingtimeReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getShippingtime()
		);
	}

	/**
	 * @test
	 */
	public function setShippingtimeForStringSetsShippingtime() {
		$this->subject->setShippingtime('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'shippingtime',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDetailReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getDetail()
		);
	}

	/**
	 * @test
	 */
	public function setDetailForIntegerSetsDetail() {
		$this->subject->setDetail(12);

		$this->assertAttributeEquals(
			12,
			'detail',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getPriceReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getPrice()
		);
	}

	/**
	 * @test
	 */
	public function setPriceForIntegerSetsPrice() {
		$this->subject->setPrice(12);

		$this->assertAttributeEquals(
			12,
			'price',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForObjectStorageContainingCategorySetsCategory() {
		$category = new \LS\Shopware\Domain\Model\Category();
		$objectStorageHoldingExactlyOneCategory = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneCategory->attach($category);
		$this->subject->setCategory($objectStorageHoldingExactlyOneCategory);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneCategory,
			'category',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addCategoryToObjectStorageHoldingCategory() {
		$category = new \LS\Shopware\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->addCategory($category);
	}

	/**
	 * @test
	 */
	public function removeCategoryFromObjectStorageHoldingCategory() {
		$category = new \LS\Shopware\Domain\Model\Category();
		$categoryObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$categoryObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($category));
		$this->inject($this->subject, 'category', $categoryObjectStorageMock);

		$this->subject->removeCategory($category);

	}

	/**
	 * @test
	 */
	public function getRelatedReturnsInitialValueForProduct() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getRelated()
		);
	}

	/**
	 * @test
	 */
	public function setRelatedForObjectStorageContainingProductSetsRelated() {
		$related = new \LS\Shopware\Domain\Model\Product();
		$objectStorageHoldingExactlyOneRelated = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneRelated->attach($related);
		$this->subject->setRelated($objectStorageHoldingExactlyOneRelated);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneRelated,
			'related',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addRelatedToObjectStorageHoldingRelated() {
		$related = new \LS\Shopware\Domain\Model\Product();
		$relatedObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$relatedObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($related));
		$this->inject($this->subject, 'related', $relatedObjectStorageMock);

		$this->subject->addRelated($related);
	}

	/**
	 * @test
	 */
	public function removeRelatedFromObjectStorageHoldingRelated() {
		$related = new \LS\Shopware\Domain\Model\Product();
		$relatedObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$relatedObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($related));
		$this->inject($this->subject, 'related', $relatedObjectStorageMock);

		$this->subject->removeRelated($related);

	}
}
