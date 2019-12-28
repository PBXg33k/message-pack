<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class ImageDTO
{
    use HydratableTrait;
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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ImageDTO
     */
    public function setId(int $id): ImageDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getFilename(): string
    {
        return $this->filename;
    }

    /**
     * @param string $filename
     * @return ImageDTO
     */
    public function setFilename(string $filename): ImageDTO
    {
        $this->filename = $filename;
        return $this;
    }

    /**
     * @return string
     */
    public function getUri(): string
    {
        return $this->uri;
    }

    /**
     * @param string $uri
     * @return ImageDTO
     */
    public function setUri(string $uri): ImageDTO
    {
        $this->uri = $uri;
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
     * @return ImageDTO
     */
    public function setModels(array $models): ImageDTO
    {
        $this->models = $models;
        return $this;
    }
}
