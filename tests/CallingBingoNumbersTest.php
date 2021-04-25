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
        $this->assertIsNotCallable($obj);;
    }


}
