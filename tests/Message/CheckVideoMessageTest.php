<?php

use Pbxg33k\MessagePack\Message\CheckVideoMessage;
use PHPUnit\Framework\TestCase;

class CheckVideoMessageTest extends TestCase
{
    private $callable;

    private $subject;

    protected function setUp(): void
    {
        $this->callable = static function() {};
        $this->subject = new CheckVideoMessage(0, $this->callable);
    }

    public function testGetCallback()
    {
        $this->assertSame($this->callable, $this->subject->getCallback());
    }
}