<?php declare(strict_types=1);

namespace AnibalCopitan\Tests\Bingo;

use PHPUnit\Framework\TestCase;
use AnibalCopitan\Bingo\CallingBingoNumbers as CallingBingoNumbers;

/**
 * Call out Bingo numbers 
 */
final class CallingBingoNumbersTest extends TestCase {

    /**
     * method is available
     * 
     * @return void
     */
    public function testMethodIsAvailable() {
        
        $obj = new CallingBingoNumbers();
        $this->assertIsNotCallable($obj);
    }

    /**
     * Validation if the result is type integer
     * 
     * @return void
     */
    public function testTheResultIsNumber() {
        
        $obj = new CallingBingoNumbers();
        $valueNumber = $obj->callOneNumber();

        $this->assertIsInt($valueNumber);
    }

    /**
     * Validation of range allowed [1-75]
     * 
     * @return void
     */
    public function testRangeNumberIsValid() {

        $obj = new CallingBingoNumbers();
        $valueNumber = $obj->callOneNumber();
        $range = range(1, 75);

        $this->assertContains($valueNumber, $range);
    }
}
