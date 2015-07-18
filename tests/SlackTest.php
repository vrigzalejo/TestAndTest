<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/11/15
 * Time: 11:59 PM
 */
class SlackTest extends PHPUnit_Framework_TestCase
{
    protected $stack;

    protected function setUp()
    {
        $this->stack = array();
    }


    public function testEmpty()
    {
        $this->assertTrue( empty( $this->stack ) );
    }


    public function testPush()
    {
        array_push( $this->stack, 'foo' );
        $this->assertEquals( 'foo', $this->stack[ count( $this->stack ) - 1 ] );
        $this->assertFalse( empty( $this->stack ) );

    }

    public function testPop()
    {
        array_push( $this->stack, 'foo' );
        $this->assertEquals( 'foo', array_pop( $this->stack ) );
        $this->assertTrue( empty( $this->stack ) );
    }
}
