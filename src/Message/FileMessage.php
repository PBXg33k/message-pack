<?php

namespace Pbxg33k\MessagePack\Message;

abstract class FileMessage
{
    /**
     * @var int
     */
    private $javFileId;

    public function __construct(int $javFileId)
    {
        $this->javFileId = $javFileId;
    }

    /**
     * @return int
     */
    public function getJavFileId(): int
    {
        return $this->javFileId;
    }
}
