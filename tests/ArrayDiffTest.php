<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/18/15
 * Time: 8:38 PM
 */
class ArrayDiffTest extends PHPUnit_Framework_TestCase
{

    public function testEquality()
    {
        $this->assertEquals(
            array( 1, 2, 3, 4, 5, 6 ),
            array( 1, 2, 33, 4, 5, 6 )
        );
    }
}
