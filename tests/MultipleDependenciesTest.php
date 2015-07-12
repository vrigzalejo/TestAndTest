<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 12:48 AM
 */
class MultipleDependenciesTest extends PHPUnit_Framework_TestCase
{

    public function testProducerFirst()
    {
        $this->assertTrue( true );

        return 'first';
    }

    public function testProducerSecond()
    {
        $this->assertTrue( true );

        return 'second';
    }

    /**
     * @depends testProducerFirst
     * @depends testProducerSecond
     */
    public function testConsumer()
    {
        $this->assertEquals(
            array( 'first', 'second' ),
            func_get_args()
        );
    }
}
