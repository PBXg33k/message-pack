<?php

namespace App\DTO;

class ModelAliasDTO
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
     * @var ModelDTO
     */
    public $model;
}
