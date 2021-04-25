<?php

namespace AnibalCopitan\Bingo;

/**
 * BingoBase implement the rules from game
 * 
 */
class BingoBase {

    /**
     * constructor
     */
    public function __construct() {

    }

    /**
     * Generate the numbers
     * 
     * @return array with the numbers
     */
    public function theRandomNumbers() {

        $range = range(1, 75);
        shuffle($range);

        return $range;
    }

    /**
     * Generate the number with the param to start and to end
     * 
     * @return array Of (five) numbers
     */
    public function theRandomNumbersWith($start, $toEnd) {
        $numbers = range($start, $toEnd);
        $numbers = array_slice($numbers, 0, 5);
        shuffle($numbers);

        return $numbers;
    }
}
