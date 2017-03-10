<?php

use PHPUnit\Framework\TestCase;

include "$_SERVER[DOCUMENT_ROOT]/wordpress/wp-content/plugins/bergclub-plugin/include/FavColours.php";


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
