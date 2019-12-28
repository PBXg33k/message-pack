<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class TitleDTO
{
    use HydratableTrait;
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return TitleDTO
     */
    public function setId(int $id): TitleDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameRomaji(): string
    {
        return $this->name_romaji;
    }

    /**
     * @param string $name_romaji
     * @return TitleDTO
     */
    public function setNameRomaji(string $name_romaji): TitleDTO
    {
        $this->name_romaji = $name_romaji;
        return $this;
    }

    /**
     * @return string
     */
    public function getNameJapanese(): string
    {
        return $this->name_japanese;
    }

    /**
     * @param string $name_japanese
     * @return TitleDTO
     */
    public function setNameJapanese(string $name_japanese): TitleDTO
    {
        $this->name_japanese = $name_japanese;
        return $this;
    }

    /**
     * @return string
     */
    public function getCatalognumber(): string
    {
        return $this->catalognumber;
    }

    /**
     * @param string $catalognumber
     * @return TitleDTO
     */
    public function setCatalognumber(string $catalognumber): TitleDTO
    {
        $this->catalognumber = $catalognumber;
        return $this;
    }

    /**
     * @return JavFileDTO[]
     */
    public function getFiles(): array
    {
        return $this->files;
    }

    /**
     * @param JavFileDTO[] $files
     * @return TitleDTO
     */
    public function setFiles(array $files): TitleDTO
    {
        $this->files = $files;
        return $this;
    }

    /**
     * @return ModelDTO[]
     */
    public function getModels(): array
    {
        return $this->models;
    }

    /**
     * @param ModelDTO[] $models
     * @return TitleDTO
     */
    public function setModels(array $models): TitleDTO
    {
        $this->models = $models;
        return $this;
    }
}
