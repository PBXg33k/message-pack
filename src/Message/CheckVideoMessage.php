<?php

namespace Pbxg33k\MessagePack\Message;

class CheckVideoMessage extends FileMessage
{
    private $callback;

    public function __construct(string $path, callable $callback = null)
    {
        $this->callback = $callback;
        parent::__construct($path);
    }

    /**
     * @return callable
     */
    public function getCallback(): ?callable
    {
        return $this->callback;
    }
}
