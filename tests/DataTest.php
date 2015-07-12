<?php

require 'src/CsvFileIterator.php';

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 12:52 AM
 */
class DataTest extends PHPUnit_Framework_TestCase
{

    /**
     * @dataProvider additionFromCSVProvider
     */
    public function testAdd( $a, $b, $expected )
    {
        $this->assertEquals( $expected, $a + $b );
    }

    public function additionProvider()
    {
//        return array(
//            array( 0, 0, 0 ),
//            array( 0, 1, 1 ),
//            array( 1, 0, 1 ),
//            array( 1, 1, 3 )
//        );
    }

    public function additionFromCSVProvider()
    {
        return new CsvFileIterator( 'data.csv' );
    }
}
