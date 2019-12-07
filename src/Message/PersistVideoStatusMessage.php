<?php


namespace Pbxg33k\MessagePack\Message;


class PersistVideoStatusMessage extends FileMessage
{
    /**
     * @var boolean
     */
    private $checked;

    /**
     * @var boolean
     */
    private $consistent;

    public function __construct(string $path, bool $checked, bool $consistent)
    {
        parent::__construct($path);
        $this->setChecked($checked);
        $this->setConsistent($consistent);
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
     * @return PersistVideoStatusMessage
     */
    public function setChecked(bool $checked): PersistVideoStatusMessage
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
     * @return PersistVideoStatusMessage
     */
    public function setConsistent(bool $consistent): PersistVideoStatusMessage
    {
        $this->consistent = $consistent;
        return $this;
    }
}
