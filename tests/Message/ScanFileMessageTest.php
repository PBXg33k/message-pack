<?php

use Pbxg33k\MessagePack\Message\ScanFileMessage;
use PHPUnit\Framework\TestCase;

class ScanFileMessageTest extends TestCase
{
    private $file;
    private $relativePath;
    private $relativePathName;

    private $subject;

    protected function setUp(): void
    {
        $this->file = 'file';
        $this->relativePath = 'relativePath';
        $this->relativePathName = 'relativePathName';

        $this->subject = new ScanFileMessage(
            $this->file,
            $this->relativePath,
            $this->relativePathName
        );
    }

    public function testGetFile()
    {
        $this->assertSame($this->file, $this->subject->getFile());
    }

    public function testGetRelativePath()
    {
        $this->assertSame($this->relativePath, $this->subject->getRelativePath());
    }

    public function testGetRelativePathName()
    {
        $this->assertSame($this->relativePathName, $this->subject->getRelativePathname());
    }
}