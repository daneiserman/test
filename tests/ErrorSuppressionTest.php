<?php
/**
 * Created by PhpStorm.
 * User: deyzerman
 * Date: 30.11.18
 * Time: 18:11
 */
require_once 'vendor/autoload.php';

use PHPUnit\Framework\TestCase;

class ErrorSuppressionTest extends TestCase
{
    public function testFileWriting()
    {
        $writer = new FileWriter;

        $this->assertFalse(@$writer->write('/is-not-writeable/file', 'stuff'));
    }
}

class FileWriter
{
    public function write($file, $content)
    {
        $file = fopen($file, 'w');

        if ($file == false) {
            return false;
        }

        // ...
    }
}