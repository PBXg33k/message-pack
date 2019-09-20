<?php

namespace Pbxg33k\MessagePack\Message;

class ScanFileMessage
{
    private $file;

    private $relativePath;

    private $relativePathname;

    public function __construct(
        string $file,
        string $relativePath,
        string $relativePathname
    ) {
        $this->file = $file;
        $this->relativePath = $relativePath;
        $this->relativePathname = $relativePathname;
    }

    /**
     * @return string
     */
    public function getFile(): string
    {
        return $this->file;
    }

    /**
     * @return string
     */
    public function getRelativePath(): string
    {
        return $this->relativePath;
    }

    /**
     * @return string
     */
    public function getRelativePathname(): string
    {
        return $this->relativePathname;
    }
}
