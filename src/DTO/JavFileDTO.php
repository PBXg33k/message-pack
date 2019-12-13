<?php

namespace Pbxg33k\MessagePack\DTO;

class JavFileDTO
{
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
}
