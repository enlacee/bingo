<?php declare(strict_types=1);

namespace AnibalCopitan\Tests\Bingo;

use PHPUnit\Framework\TestCase;
use AnibalCopitan\Bingo\GenerateBingoCards as GenerateBingoCards;

/**
 * Call out Bingo numbers 
 */
final class GenerateBingoCardsTest extends TestCase {

    /**
     * data array properties validation
     * 
     * @return void
     */
    public function testResultHasProperties() {

        $obj = new GenerateBingoCards();
        $bingoArray = $obj->create();

        // 1. is array
        $this->assertIsArray($bingoArray);

        // 2. has 5 items
        $this->assertCount(5, $bingoArray);
        
        // 3. has propert key
        $this->assertArrayHasKey('b', $bingoArray);
        $this->assertArrayHasKey('i', $bingoArray);
        $this->assertArrayHasKey('n', $bingoArray);
        $this->assertArrayHasKey('g', $bingoArray);
        $this->assertArrayHasKey('o', $bingoArray);
    }
}