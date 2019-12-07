<?php

use Pbxg33k\MessagePack\Message\VideoCheckedMessage;
use PHPUnit\Framework\TestCase;

class VideoCheckedMessageTest extends TestCase
{
    /**
     * @var VideoCheckedMessage
     */
    protected $subject;

    protected $path;

    protected function setUp(): void
    {
        $this->path = '/test/path.mp4';
        $this->subject = new VideoCheckedMessage($this->path);
    }

    public function testPath()
    {
        $this->assertSame($this->path, $this->subject->getPath());
    }

    public function testChecked()
    {
        $this->subject->setChecked(true);
        $this->assertSame(true, $this->subject->isChecked());
        $this->subject->setChecked(false);
        $this->assertSame(false, $this->subject->isChecked());
    }

    public function testConsistent()
    {
        $this->subject->setConsistent(true);
        $this->assertSame(true, $this->subject->isConsistent());
        $this->subject->setConsistent(false);
        $this->assertSame(false, $this->subject->isConsistent());
    }
}
