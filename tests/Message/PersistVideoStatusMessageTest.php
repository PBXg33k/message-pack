<?php


use Pbxg33k\MessagePack\Message\PersistVideoStatusMessage;

class PersistVideoStatusMessageTest extends VideoCheckedMessageTest
{
    protected function setUp(): void
    {
        $this->path = '/test/path.mp4';
        $this->subject = new PersistVideoStatusMessage($this->path, false, false);
    }

    public function testConstruct()
    {
        $this->assertSame($this->path, $this->subject->getPath());
        $this->assertFalse($this->subject->isChecked());
        $this->assertFalse($this->subject->isConsistent());
    }
}
