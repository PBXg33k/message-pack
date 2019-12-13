<?php

namespace App\DTO;

class TitleDTO
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
     * @var string
     */
    public $catalognumber;

    /**
     * @var JavFileDTO[]
     */
    public $files = [];

    /**
     * @var ModelDTO[]
     */
    public $models = [];
}
