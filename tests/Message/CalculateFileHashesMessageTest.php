<?php

use Pbxg33k\MessagePack\Message\CalculateFileHashesMessage;

class CalculateFileHashesMessageTest extends PHPUnit_Framework_TestCase
{


    public function testHasSha512()
    {
        $message = new CalculateFileHashesMessage(1, CalculateFileHashesMessage::HASH_SHA512);
    }

    public function test__construct()
    {

    }

    public function testGetJavFileId()
    {

    }

    public function testHasMd5()
    {

    }

    public function testHasSha1()
    {

    }

    public function testHasXxhash()
    {

    }
}
