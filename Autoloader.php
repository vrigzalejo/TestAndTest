<?php

/**
 * Created by PhpStorm.
 * User: vrigzlinuxmint13
 * Date: 7/12/15
 * Time: 1:07 AM
 */
class Autoloader
{

    static private $classNames = array();

    /**
     * Store the filename & full path of all *.php files found
     */
    public static function registerDirectory( $dirName )
    {

        $di = new DirectoryIterator( $dirName );
        foreach( $di as $file ) {

            if( $file->isDir() && ! $file->isLink() && ! $file->isDot() ) {

                // recurse into directories other than a few special one
                self::registerDirectory( $file->getPathname() );
            } elseif( substr( $file->getFilename(), -4 ) === '.php' ) {
                // save the class name / path of a .php file found
                $className = substr( $file->getFilename(), 0, 4 );
                Autoloader::registerClass( $className, $file->getPathname() );
            }
        }
    }

    public static function registerClass( $className, $fileName )
    {
        Autoloader::$classNames[ $className ] = $fileName;
    }

    public static function loadClass( $className )
    {
        if( isset( Autoloader::$classNames[ $className ] ) ) {
            require_once( Autoloader::$classNames[ $className ] );
        }
    }
}

spl_autoload_register(array('Autoloader', 'loadClass'));