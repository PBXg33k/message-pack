<?php

namespace Pbxg33k\MessagePack\Message;

class CheckVideoMessage extends FileMessage
{
    private $callback;

    public function __construct(int $javFileId, callable $callback = null)
    {
        $this->callback = $callback;
        parent::__construct($javFileId);
    }

    /**
     * @return callable
     */
    public function getCallback(): ?callable
    {
        return $this->callback;
    }
}
