<?php

namespace App\DTO;

class ImageDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $filename;

    /**
     * @var string
     */
    private $uri;

    /**
     * @var ModelDTO[]
     */
    private $models = [];
}
