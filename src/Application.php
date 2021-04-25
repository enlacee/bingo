<?php

namespace AnibalCopitan\Bingo;

use AnibalCopitan\Bingo;
/**
 * Main class start application
 */
class Application {

    /**
     * Start App (Exmaple to use)
     */
    public function start() {

        $bingoNumber = new CallingBingoNumbers();
        $bingoCard = new GenerateBingoCards();

        echo "<b>The first number is:</b> ";
        echo $bingoNumber->callOneNumber();

        echo "<br/><br/><b>Bingo card:</b> [1] <br/>";
        echo "<pre>";
        print_r($bingoCard->create());
        // echo "<br/><br/><b>Bingo card:</b> [2] <br/>";
        // print_r($bingoCard->create());
    }
}
