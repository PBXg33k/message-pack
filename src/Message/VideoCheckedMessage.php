<?php

namespace Pbxg33k\MessagePack\Message;

class VideoCheckedMessage extends FileMessage
{
    /**
     * @var boolean
     */
    private $checked;

    /**
     * @var boolean
     */
    private $consistent;

    public function __construct(string $path)
    {
        parent::__construct($path);
    }

    /**
     * @return bool
     */
    public function isChecked(): bool
    {
        return $this->checked;
    }

    /**
     * @param bool $checked
     * @return VideoCheckedMessage
     */
    public function setChecked(bool $checked): VideoCheckedMessage
    {
        $this->checked = $checked;
        return $this;
    }

    /**
     * @return bool
     */
    public function isConsistent(): bool
    {
        return $this->consistent;
    }

    /**
     * @param bool $consistent
     * @return VideoCheckedMessage
     */
    public function setConsistent(bool $consistent): VideoCheckedMessage
    {
        $this->consistent = $consistent;
        return $this;
    }
}
