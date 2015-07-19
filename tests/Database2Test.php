<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/19/15
 * Time: 9:43 PM
 */
class Database2Test extends PHPUnit_Framework_TestCase
{

    protected function setUp()
    {
        if( ! extension_loaded( 'mysqli' ) ) {
            $this->markTestSkipped(
                'The MySQLi extension is not available.'
            );
        }
    }

    public function testConnection()
    {
        //
    }
}
