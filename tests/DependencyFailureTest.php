<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 12:46 AM
 */
class DependencyFailureTest extends PHPUnit_Framework_TestCase
{

    public function testOne()
    {
        $this->assertTrue( false );
    }

    /**
     * @depends testOne
     */
    public function testTwo()
    {

    }
}
