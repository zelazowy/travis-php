<?php declare(strict_types=1);

namespace App\Tests\Service;

use App\Service\Calculator;
use PHPUnit\Framework\TestCase;

class CalculatorTest extends TestCase
{
    /**
     * {@inheritdoc}
     * @dataProvider addData
     */
    public function testAdd(int $a, int $b, int $expected)
    {
        $calculator = new Calculator();

        $this->assertEquals($expected, $calculator->add($a, $b));
    }

    public function addData(): array
    {
        return [
            [2, 2, 4],
            [-1, 2, 1],
            [0, 0, 0],
            [-666, 666, 0],
        ];
    }
}
