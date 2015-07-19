<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/19/15
 * Time: 9:40 PM
 */
class SampleTest extends PHPUnit_Framework_TestCase
{
    public function testSomething()
    {
        // Optional: Test anything here, if you want.
        $this->assertTrue( true, 'This should already work.' );

        // Stop here and mark this test as incomplete
        $this->markTestIncomplete(
            'This test has not been implemented yet.'
        );
    }
}
