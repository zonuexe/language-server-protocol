<?php

namespace LanguageServerProtocol;

class DeleteFile
{
    /**
     * A delete
     *
     * @var 'delete'
     */
    public $kind;

    /**
     * The file to delete.
     *
     * @var string
     */
    public $uri;

    /**
     * Delete options.
     *
     * @var DeleteFileOptions
     */
    public $options;

    /**
     * @param 'delete' $kind
     * @param string $uri
     * @param DeleteFileOptions $options
     */
    public function __construct($kind, string $uri, DeleteFileOptions $options)
    {
        $this->kind = $kind;
        $this->uri = $uri;
        $this->options = $options;
    }
}