<?php

use PHPUnit\Framework\TestCase;

include __DIR__ . "/../include/FavColours.php";


class TestFavColours extends TestCase
{
    /**
     * @test
     */
    public function redTest()
    {
        $fav = new FavColours();
        $fav->colour = "red";
        $this->assertTrue($fav->checkIfColoutIsRed());
    }
}
