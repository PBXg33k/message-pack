<?php

namespace Pbxg33k\MessagePack\DTO;

use Pbxg33k\Traits\HydratableTrait;

class CompanyDTO
{
    use HydratableTrait;
    /**
     * @var int
     */
    public $id;

    /**
     * @var string
     */
    public $name;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return CompanyDTO
     */
    public function setId(int $id): CompanyDTO
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return CompanyDTO
     */
    public function setName(string $name): CompanyDTO
    {
        $this->name = $name;
        return $this;
    }
}
