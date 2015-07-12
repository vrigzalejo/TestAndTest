<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 8:06 PM
 */
class ExceptionTest extends PHPUnit_Framework_TestCase
{

    public function testException()
    {
//        $this->setExpectedException( 'InvalidArgumentException' );
        try {

        } catch( InvalidArgumentException $expected ) {
            return;
        }

        $this->fail( 'An expected exception has not been raised.' );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessage Right Message
     */
    public function testExceptionHasRightMessage()
    {
        $this->setExpectedException( 'InvalidArgumentException', 'Right Message' );
        throw new InvalidArgumentException( 'Some Message', 10 );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionMessageRegExp #Right.*#
     */
    public function testExceptionMessageMatchesRegExp()
    {
        $this->setExpectedExceptionRegExp( 'InvalidArgumentException', '/Right.*', 10 );
        throw new InvalidArgumentException( 'Some Message', 10 );
    }

    /**
     * @expectedException InvalidArgumentException
     * @expectedExceptionCode 20
     */
    public function testExceptionHasRightCode()
    {
        $this->setExpectedException( 'InvalidArgumentException', 'Right Message', 20 );
        throw new InvalidArgumentException( 'The Right Message', 10 );
    }
}
