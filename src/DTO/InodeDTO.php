<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class InodeDTO
{
    use HydratableTrait;
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $md5;

    /**
     * @var string
     */
    public $sha1;

    /**
     * @var string
     */
    public $sha512;

    /**
     * @var string
     */
    public $xxhash;

    /**
     * @var bool
     */
    public $checked = false;

    /**
     * @var int
     */
    public $height;

    /**
     * @var int
     */
    public $width;

    /**
     * @var float
     */
    public $fps;

    /**
     * @var bool
     */
    public $codec;

    /**
     * @var bool
     */
    public $consistent;

    /**
     * @var mixed
     */
    public $meta;

    /**
     * @var int
     */
    public $length;

    /**
     * @var int
     */
    public $bitrate;

    /**
     * @var integer
     */
    public $filesize;

    /**
     * @var bool
     */
    public $processed = false;

    /**
     * @var JavFileDTO[]
     */
    public $javFiles = [];

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return InodeDTO
     */
    public function setId(int $id): InodeDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getMd5(): string
    {
        return $this->md5;
    }

    /**
     * @param string $md5
     * @return InodeDTO
     */
    public function setMd5(string $md5): InodeDTO
    {
        $this->md5 = $md5;
        return $this;
    }

    /**
     * @return string
     */
    public function getSha1(): string
    {
        return $this->sha1;
    }

    /**
     * @param string $sha1
     * @return InodeDTO
     */
    public function setSha1(string $sha1): InodeDTO
    {
        $this->sha1 = $sha1;
        return $this;
    }

    /**
     * @return string
     */
    public function getSha512(): string
    {
        return $this->sha512;
    }

    /**
     * @param string $sha512
     * @return InodeDTO
     */
    public function setSha512(string $sha512): InodeDTO
    {
        $this->sha512 = $sha512;
        return $this;
    }

    /**
     * @return string
     */
    public function getXxhash(): string
    {
        return $this->xxhash;
    }

    /**
     * @param string $xxhash
     * @return InodeDTO
     */
    public function setXxhash(string $xxhash): InodeDTO
    {
        $this->xxhash = $xxhash;
        return $this;
    }

    /**
     * @return bool
     */
    public function isChecked(): bool
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     * @return InodeDTO
     */
    public function setChecked(bool $checked): InodeDTO
    {
        $this->checked = $checked;
        return $this;
    }

    /**
     * @return int
     */
    public function getHeight(): int
    {
        return $this->height;
    }

    /**
     * @param int $height
     * @return InodeDTO
     */
    public function setHeight(int $height): InodeDTO
    {
        $this->height = $height;
        return $this;
    }

    /**
     * @return int
     */
    public function getWidth(): int
    {
        return $this->width;
    }

    /**
     * @param int $width
     * @return InodeDTO
     */
    public function setWidth(int $width): InodeDTO
    {
        $this->width = $width;
        return $this;
    }

    /**
     * @return float
     */
    public function getFps(): float
    {
        return $this->fps;
    }

    /**
     * @param float $fps
     * @return InodeDTO
     */
    public function setFps(float $fps): InodeDTO
    {
        $this->fps = $fps;
        return $this;
    }

    /**
     * @return bool
     */
    public function isCodec(): bool
    {
        return $this->codec;
    }

    /**
     * @param bool $codec
     * @return InodeDTO
     */
    public function setCodec(bool $codec): InodeDTO
    {
        $this->codec = $codec;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConsistent(): bool
    {
        return $this->consistent;
    }

    /**
     * @param bool $consistent
     * @return InodeDTO
     */
    public function setConsistent(bool $consistent): InodeDTO
    {
        $this->consistent = $consistent;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getMeta()
    {
        return $this->meta;
    }

    /**
     * @param mixed $meta
     * @return InodeDTO
     */
    public function setMeta($meta)
    {
        $this->meta = $meta;
        return $this;
    }

    /**
     * @return int
     */
    public function getLength(): int
    {
        return $this->length;
    }

    /**
     * @param int $length
     * @return InodeDTO
     */
    public function setLength(int $length): InodeDTO
    {
        $this->length = $length;
        return $this;
    }

    /**
     * @return int
     */
    public function getBitrate(): int
    {
        return $this->bitrate;
    }

    /**
     * @param int $bitrate
     * @return InodeDTO
     */
    public function setBitrate(int $bitrate): InodeDTO
    {
        $this->bitrate = $bitrate;
        return $this;
    }

    /**
     * @return int
     */
    public function getFilesize(): int
    {
        return $this->filesize;
    }

    /**
     * @param int $filesize
     * @return InodeDTO
     */
    public function setFilesize(int $filesize): InodeDTO
    {
        $this->filesize = $filesize;
        return $this;
    }

    /**
     * @return bool
     */
    public function isProcessed(): bool
    {
        return $this->processed;
    }

    /**
     * @param bool $processed
     * @return InodeDTO
     */
    public function setProcessed(bool $processed): InodeDTO
    {
        $this->processed = $processed;
        return $this;
    }

    /**
     * @return JavFileDTO[]
     */
    public function getJavFiles(): array
    {
        return $this->javFiles;
    }

    /**
     * @param JavFileDTO[] $javFiles
     * @return InodeDTO
     */
    public function setJavFiles(array $javFiles): InodeDTO
    {
        $this->javFiles = $javFiles;
        return $this;
    }
}
