<?php

namespace Pbxg33k\MessagePack\Message;

class PersistEntityMessage
{
    /**
     * @var object
     */
    private $object;

    public function __construct(object $object)
    {
        $this->object = $object;
    }

    /**
     * @return object
     */
    public function getObject(): object
    {
        return $this->object;
    }

    /**
     * @param object $object
     * @return PersistEntityMessage
     */
    public function setObject(object $object): PersistEntityMessage
    {
        $this->object = $object;
        return $this;
    }
}
