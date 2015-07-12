<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 1:52 PM
 */
class DependencyAndDataProviderComboTest extends PHPUnit_Framework_TestCase
{

    public function provider()
    {
//        return array( array( 'provider1' ), array( 'provider2' ) );
        return array( array( 'provider1' ) );
    }

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
     * @depends      testProducerFirst
     * @depends      testProducerSecond
     * @dataProvider provider
     */
    public function testConsumer()
    {
        $this->assertEquals(
            array( 'provider1', 'first', 'second' ),
            func_get_args()
        );
    }
}
