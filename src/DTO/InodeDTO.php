<?php

namespace App\DTO;

class InodeDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $md5;

    /**
     * @var string
     */
    private $sha1;

    /**
     * @var string
     */
    private $sha512;

    /**
     * @var string
     */
    private $xxhash;

    /**
     * @var bool
     */
    private $checked = false;

    /**
     * @var int
     */
    private $height;

    /**
     * @var int
     */
    private $width;

    /**
     * @var float
     */
    private $fps;

    /**
     * @var bool
     */
    private $codec;

    /**
     * @var bool
     */
    private $consistent;

    /**
     * @var mixed
     */
    private $meta;

    /**
     * @var int
     */
    private $length;

    /**
     * @var int
     */
    private $bitrate;

    /**
     * @var integer
     */
    private $filesize;

    /**
     * @var bool
     */
    private $processed = false;

    /**
     * @var JavFileDTO[]
     */
    private $javFiles = [];
}
