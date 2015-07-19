<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/18/15
 * Time: 10:34 PM
 */
class TemplateMethodsTest extends PHPUnit_Framework_TestCase
{

    public static function setUpBeforeClass()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    protected function setUp()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    protected function assertPreConditions()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    public function testOne()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
        $this->assertTrue( true );
    }

    public function testTwo()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
        $this->assertTrue( false );
    }

    protected function assertPostConditions()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    protected function tearDown()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    public static function tearDownAfterClass()
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
    }

    protected function onNotSuccessfulTest( Exception $e )
    {
        fwrite( STDOUT, __METHOD__ . "\n" );
        throw $e;
    }
}
