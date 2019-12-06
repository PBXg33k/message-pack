<?php

namespace Pbxg33k\MessagePack\Message;

class CheckVideoMessage extends FileMessage
{
    /**
     * @var callable
     */
    private $callback;

    /**
     * @var bool
     */
    private $strict;

    /**
     * @var ?int
     */
    private $videoLength;

    public function __construct(string $path, callable $callback = null, bool $strict = true, ?int $videoLength = null)
    {
        $this->callback = $callback;
        $this->strict = $strict;
        $this->videoLength = $videoLength;
        parent::__construct($path);
    }

    /**
     * @return callable
     */
    public function getCallback(): ?callable
    {
        return $this->callback;
    }

    /**
     * @return bool
     */
    public function isStrict(): bool
    {
        return $this->strict;
    }

    /**
     * @return mixed
     */
    public function getVideoLength()
    {
        return $this->videoLength;
    }
}
