<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 9:02 PM
 */
class ErrorSuppressionTest extends PHPUnit_Framework_TestCase
{

    public function testFileWriting()
    {
        $writer = new FileWriter;
        $this->assertFalse( @$writer->write( '/is-not-writeable/file', 'stuff' ) );
    }
}

class FileWriter
{
    public function write( $file, $content )
    {
        $file = fopen( $file, 'w' );
        if( $file == false ) {
            return false;
        }
    }
}
