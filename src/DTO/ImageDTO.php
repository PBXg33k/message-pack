<?php

namespace Pbxg33k\MessagePack\DTO;

class ImageDTO
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $filename;

    /**
     * @var string
     */
    public $uri;

    /**
     * @var ModelDTO[]
     */
    public $models = [];
}
