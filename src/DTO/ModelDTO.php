<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class ModelDTO
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModelDTO
     */
    public function setId(int $id): ModelDTO
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
     * @return ModelDTO
     */
    public function setNameRomaji(string $name_romaji): ModelDTO
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
     * @return ModelDTO
     */
    public function setNameJapanese(string $name_japanese): ModelDTO
    {
        $this->name_japanese = $name_japanese;
        return $this;
    }

    /**
     * @return ModelAliasDTO[]
     */
    public function getAliases(): array
    {
        return $this->aliases;
    }

    /**
     * @param ModelAliasDTO[] $aliases
     * @return ModelDTO
     */
    public function setAliases(array $aliases): ModelDTO
    {
        $this->aliases = $aliases;
        return $this;
    }

    /**
     * @return TitleDTO[]
     */
    public function getTitles(): array
    {
        return $this->titles;
    }

    /**
     * @param TitleDTO[] $titles
     * @return ModelDTO
     */
    public function setTitles(array $titles): ModelDTO
    {
        $this->titles = $titles;
        return $this;
    }

    /**
     * @return ImageDTO[]
     */
    public function getImages(): array
    {
        return $this->images;
    }

    /**
     * @param ImageDTO[] $images
     * @return ModelDTO
     */
    public function setImages(array $images): ModelDTO
    {
        $this->images = $images;
        return $this;
    }
}
