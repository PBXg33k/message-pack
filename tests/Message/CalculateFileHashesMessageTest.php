<?php

use Pbxg33k\MessagePack\Message\CalculateFileHashesMessage;
use PHPUnit\Framework\TestCase;

class CalculateFileHashesMessageTest extends TestCase
{
    private const PATH = "fictive/path";

    private $emptyMessage;
    private $md5Message;
    private $sha1Message;
    private $sha512Message;
    private $xxhashMessage;

    private $md5AndxxhashMessage;

    protected function setUp(): void
    {
        $this->emptyMessage = new CalculateFileHashesMessage(self::PATH);
        $this->md5Message = new CalculateFileHashesMessage(self::PATH, CalculateFileHashesMessage::HASH_MD5);
        $this->sha1Message = new CalculateFileHashesMessage(self::PATH, CalculateFileHashesMessage::HASH_SHA1);
        $this->sha512Message = new CalculateFileHashesMessage(self::PATH, CalculateFileHashesMessage::HASH_SHA512);
        $this->xxhashMessage = new CalculateFileHashesMessage(self::PATH, CalculateFileHashesMessage::HASH_XXHASH);
        $this->md5AndxxhashMessage = new CalculateFileHashesMessage(self::PATH, CalculateFileHashesMessage::HASH_MD5 | CalculateFileHashesMessage::HASH_XXHASH);
    }

    public function testHasSha512()
    {
        $this->assertFalse($this->emptyMessage->hasSha512());
        $this->assertFalse($this->md5Message->hasSha512());
        $this->assertFalse($this->sha1Message->hasSha512());
        $this->assertTrue($this->sha512Message->hasSha512());
        $this->assertFalse($this->xxhashMessage->hasSha512());
        $this->assertFalse($this->md5AndxxhashMessage->hasSha512());
    }

    public function testGetJavFileId()
    {
        $this->assertSame(self::PATH, $this->emptyMessage->getPath());
    }

    public function testHasMd5()
    {
        $this->assertFalse($this->emptyMessage->hasMd5());
        $this->assertTrue($this->md5Message->hasMd5());
        $this->assertFalse($this->sha1Message->hasMd5());
        $this->assertFalse($this->sha512Message->hasMd5());
        $this->assertFalse($this->xxhashMessage->hasMd5());
        $this->assertTrue($this->md5AndxxhashMessage->hasMd5());
    }

    public function testHasSha1()
    {
        $this->assertFalse($this->emptyMessage->hasSha1());
        $this->assertFalse($this->md5Message->hasSha1());
        $this->assertTrue($this->sha1Message->hasSha1());
        $this->assertFalse($this->sha512Message->hasSha1());
        $this->assertFalse($this->xxhashMessage->hasSha1());
        $this->assertFalse($this->md5AndxxhashMessage->hasSha1());
    }

    public function testHasXxhash()
    {
        $this->assertFalse($this->emptyMessage->hasXxhash());
        $this->assertFalse($this->md5Message->hasXxhash());
        $this->assertFalse($this->sha1Message->hasXxhash());
        $this->assertFalse($this->sha512Message->hasXxhash());
        $this->assertTrue($this->xxhashMessage->hasXxhash());
        $this->assertTrue($this->md5AndxxhashMessage->hasXxhash());
    }
}
