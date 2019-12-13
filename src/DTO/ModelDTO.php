<?php

namespace App\DTO;

class ModelDTO
{
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name_romaji;

    /**
     * @var string
     */
    public $name_japanese;

    /**
     * @var ModelAliasDTO[]
     */
    public $aliases = [];

    /**
     * @var TitleDTO[]
     */
    public $titles = [];

    /**
     * @var ImageDTO[]
     */
    public $images = [];
}
