<?php
/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/18/15
 * Time: 11:32 PM
 */

class DatabaseTest extends PHPUnit_Framework_TestCase {

    protected static $dbh;

    public static function setUpBeforeCLass()
    {
        self::$dbh = new PDO('sqlite::memory:');
    }

    public static function testDownAfterClass()
    {
        self::$dbh = NULL;
    }
}
