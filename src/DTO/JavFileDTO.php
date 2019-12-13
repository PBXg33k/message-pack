<?php

namespace App\DTO;

class JavFileDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $part;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $path;

    /**
     * @var TitleDTO
     */
    private $title;

    /**
     * @var InodeDTO
     */
    private $inode;
}
