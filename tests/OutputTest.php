<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/18/15
 * Time: 7:54 PM
 */

class OutputTest extends PHPUnit_Framework_TestCase {

    public function testExpectFooActualFoo()
    {
        $this->expectOutputString('foo');
        print 'foo';
    }

    public function testExpectBarActualBaz()
    {
        $this->expectOutputString('bar');
        print 'baz';
    }

}
