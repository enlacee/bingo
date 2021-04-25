<?php

namespace AnibalCopitan\Bingo;

/**
 * Call out Bingo numbers 
 */
class CallingBingoNumbers extends BingoBase {

    /**
     * constructor
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * This function should be call many times
     * 
     * @return int number
     */
    public function callOneNumber() {

        $numbers = $this->theRandomNumbers();

        return $numbers[0];
    }
}
