<?php

namespace App\Entity;
use Exception;

class Fibonacci
{
	const MIN_ITERATION = 2;

	/**
	 * @var int Position of fibonacci where we start the sequence
	 */
	private int $startNumber = 0;

	/**
	 * @var int Total of numbers to show
	 */
	private int $iterationNumber = self::MIN_ITERATION;

	/**
	 * @return int
	 */
	public function getStartNumber()
	: int
	{
		return $this->startNumber;
	}

	/**
	 * @param int $startNumber
	 */
	public function setStartNumber(int $startNumber)
	: void
	{
		$this->startNumber = $startNumber;
	}

	/**
	 * @return int
	 */
	public function getIterationNumber()
	: int
	{
		return $this->iterationNumber;
	}

	/**
	 * @param int $iterationNumber
	 */
	public function setIterationNumber(int $iterationNumber = 0)
	: void
	{
		if ($iterationNumber == 0) {
			throw new Exception('Invalid total to iterate');
		}
		$this->iterationNumber = $iterationNumber;
	}
}
