<?php

namespace Pbxg33k\MessagePack\DTO;

class InodeDTO
{
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
}
