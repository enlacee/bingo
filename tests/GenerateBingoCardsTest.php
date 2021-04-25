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

    /**
     * Count if has 25 items the array
     * 
     * @return void
     */
    public function testHas25UniqueSpaces() {
        $obj = new GenerateBingoCards();
        $bingoArray = $obj->create();

        $this->assertCount(5, $bingoArray['b']);
        $this->assertCount(5, $bingoArray['i']);
        $this->assertCount(5, $bingoArray['n']);
        $this->assertCount(5, $bingoArray['g']);
        $this->assertCount(5, $bingoArray['o']);
    }

    /**
     * Validion the if have a 1 Free space (represented by the number "0" )
     * Zero emulate a FREE SPACE
     * 
     * @return void
     */
    public function testHasFreeSpaceInTheMiddle() {

        $obj = new GenerateBingoCards();
        $bingoArray = $obj->create();

        $this->assertContains(0, $bingoArray['n']);
    }
}