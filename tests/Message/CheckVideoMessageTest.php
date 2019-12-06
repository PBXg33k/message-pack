<?php

use Pbxg33k\MessagePack\Message\CheckVideoMessage;
use PHPUnit\Framework\TestCase;

class CheckVideoMessageTest extends TestCase
{
    private const PATH = "fictive/path";

    private $callable;

    private $subject;

    protected function setUp(): void
    {
        $this->callable = static function() {};
        $this->subject = new CheckVideoMessage(self::PATH, $this->callable, false);
    }

    public function testGetCallback()
    {
        $this->assertSame($this->callable, $this->subject->getCallback());
    }

    public function testStrict()
    {
        $this->assertFalse($this->subject->isStrict());
    }

    public function testVideoLength()
    {
        $val = 356789;
        $message = new CheckVideoMessage(self::PATH, $this->callable, false, $val);
        $this->assertSame($val, $message->getVideoLength());
    }
}
