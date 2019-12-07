<?php


namespace Pbxg33k\MessagePack\Message;


class PersistVideoStatusMessage extends VideoCheckedMessage
{
    public function __construct(string $path, bool $checked, bool $consistent)
    {
        parent::__construct($path);
        $this->setChecked($checked);
        $this->setConsistent($consistent);
    }
}
