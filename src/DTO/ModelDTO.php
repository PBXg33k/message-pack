<?php

namespace App\DTO;

class ModelDTO
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $name_romaji;

    /**
     * @var string
     */
    private $name_japanese;

    /**
     * @var ModelAliasDTO[]
     */
    private $aliases = [];

    /**
     * @var TitleDTO[]
     */
    private $titles = [];

    /**
     * @var ImageDTO[]
     */
    private $images = [];
}
