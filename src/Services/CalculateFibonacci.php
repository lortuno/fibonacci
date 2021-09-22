<?php

namespace App\Services;

use App\Entity\Fibonacci;

class CalculateFibonacci
{
	private Fibonacci $fibonacci;

	public function __construct()
	{
		$this->fibonacci = new Fibonacci();
	}

	public function getSequence(?int $startNumber = null, ?int $count = null)
	: array
	{
		$this->setFibonacciValues($startNumber, $count);

		$numbersToShow = [];

		$maxCount = $this->fibonacci->getIterationNumber() + $this->fibonacci->getStartNumber();

		for ($currentPosition = 1, $previousPosition = 0, $beforePreviousPosition = 0;
		     $maxCount-- > 0;
			 $beforePreviousPosition = $previousPosition, $previousPosition = $currentPosition, $currentPosition = $beforePreviousPosition + $previousPosition)
		{
			if ($currentPosition >= $this->fibonacci->getStartNumber())
			{
				$numbersToShow[] = $currentPosition;
			}
		}

		return $numbersToShow;
	}

	/**
	 * @param int|null $startNumber
	 * @param int|null $count
	 *
	 * @throws \Exception
	 */
	private function setFibonacciValues(?int $startNumber, ?int $count)
	: void
	{
		if ($startNumber)
		{
			$this->fibonacci->setStartNumber($startNumber);
		}

		if ($count)
		{
			$this->fibonacci->setIterationNumber($count);
		}
	}
}
