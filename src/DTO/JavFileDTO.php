<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class JavFileDTO
{
    use HydratableTrait;
    /**
     * @var int
     */
    public $id;

    /**
     * @var int
     */
    public $part;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $path;

    /**
     * @var TitleDTO
     */
    public $title;

    /**
     * @var InodeDTO
     */
    public $inode;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return JavFileDTO
     */
    public function setId(int $id): JavFileDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return int
     */
    public function getPart(): int
    {
        return $this->part;
    }

    /**
     * @param int $part
     * @return JavFileDTO
     */
    public function setPart(int $part): JavFileDTO
    {
        $this->part = $part;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return JavFileDTO
     */
    public function setFilename(string $filename): JavFileDTO
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getPath(): string
    {
        return $this->path;
    }

    /**
     * @param string $path
     * @return JavFileDTO
     */
    public function setPath(string $path): JavFileDTO
    {
        $this->path = $path;
        return $this;
    }

    /**
     * @return TitleDTO
     */
    public function getTitle(): TitleDTO
    {
        return $this->title;
    }

    /**
     * @param TitleDTO $title
     * @return JavFileDTO
     */
    public function setTitle(TitleDTO $title): JavFileDTO
    {
        $this->title = $title;
        return $this;
    }

    /**
     * @return InodeDTO
     */
    public function getInode(): InodeDTO
    {
        return $this->inode;
    }

    /**
     * @param InodeDTO $inode
     * @return JavFileDTO
     */
    public function setInode(InodeDTO $inode): JavFileDTO
    {
        $this->inode = $inode;
        return $this;
    }
}
