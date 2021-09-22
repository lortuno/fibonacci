<?php

namespace App\tests\Unit\Services;

use App\Services\CalculateFibonacci;
use PHPUnit\Framework\TestCase;

class FibonacciTest extends TestCase
{
	/**
	 * @test
	 */
	public function testFibonacciReturn10Numbers()
	{
		$service = new CalculateFibonacci();
		$result = $service->getSequence(2,10);
		$this->assertIsArray($result);
		$this->assertCount(10, $result);
	}

	/**
	 * @test
	 */
	public function testFibonacciReturn2Numbers()
	{
		$service = new CalculateFibonacci();
		$result = $service->getSequence(4,2);
		$this->assertIsArray($result);
		$this->assertCount(2, $result);
		$this->assertEquals(5, $result[0]);
		$this->assertEquals(8, $result[1]);
	}

	/**
	 * @test
	 */
	public function testFibonacciReturnsDefault()
	{
		$service = new CalculateFibonacci();
		$result = $service->getSequence();
		$this->assertIsArray($result);
		$this->assertCount(2, $result);
		$this->assertEquals(1, $result[0]);
		$this->assertEquals(1, $result[1]);

		var_dump($result);
	}

	public function tearDown()
	: void
	{
		parent::tearDown();
	}
}
