<?php
/*
 * This file is part of the Money package.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace SebastianBergmann\Money;

use PHPUnit\Framework\TestCase;

class easytest extends TestCase
{
    /**
     * @covers            \SebastianBergmann\Money\Money::__construct
     * @uses              \SebastianBergmann\Money\Currency
     * @expectedException \SebastianBergmann\Money\InvalidArgumentException
     */
    public function testExceptionIsRaisedForInvalidConstructorArguments()
    {
        new Money(null, new Currency('EUR'));
    }
}
