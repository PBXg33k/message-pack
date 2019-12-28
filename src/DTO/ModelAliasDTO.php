<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class ModelAliasDTO
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
     * @var ModelDTO
     */
    public $model;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ModelAliasDTO
     */
    public function setId(int $id): ModelAliasDTO
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
     * @return ModelAliasDTO
     */
    public function setNameRomaji(string $name_romaji): ModelAliasDTO
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
     * @return ModelAliasDTO
     */
    public function setNameJapanese(string $name_japanese): ModelAliasDTO
    {
        $this->name_japanese = $name_japanese;
        return $this;
    }

    /**
     * @return ModelDTO
     */
    public function getModel(): ModelDTO
    {
        return $this->model;
    }

    /**
     * @param ModelDTO $model
     * @return ModelAliasDTO
     */
    public function setModel(ModelDTO $model): ModelAliasDTO
    {
        $this->model = $model;
        return $this;
    }
}
