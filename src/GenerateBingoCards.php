<?php

namespace AnibalCopitan\Bingo;

/**
 * Call out Bingo numbers 
 */
class GenerateBingoCards extends BingoBase {

    public function __construct() {
        parent::__construct();
    }

    /**
     * Basic: Bingo card (5x5)
     * Create the 25 number of the card
     * 
     * @return array of numbers
     */
    public function create() {

        $result = array(
            'b' => $this->theRandomNumbersWith(1, 15),
            'i' => $this->theRandomNumbersWith(16, 30),
            'n' => $this->theRandomNumbersWith(31, 45),
            'g' => $this->theRandomNumbersWith(46, 60),
            'o' => $this->theRandomNumbersWith(61, 75)
        );

        // Free space in the middle (set to Zero)
        $result['n'][2] = 0;

        return $result;
    }

}
