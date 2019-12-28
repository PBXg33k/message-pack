<?php

namespace Pbxg33k\MessagePack\Message;

abstract class FileMessage
{
    /**
     * @var ?int
     *
     * JavFile id to be used for downloading the file over HTTP(S)
     */
    private $id;

    /**
     * @var string
     */
    private $path;

    public function __construct(string $path, ?int $id = null)
    {
        $this->path = $path;
        $this->id = $id;
    }

    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }
}
