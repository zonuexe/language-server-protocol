<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Delete file options
 */
class DeleteFileOptions
{
    /**
     * Delete the content recursively if a folder is denoted.
     *
     * @var bool|null
     */
    public $recursive;

    /**
     * Ignore the operation if the file doesn't exist.
     *
     * @var bool|null
     */
    public $ignoreIfNotExists;

    /**
     * @param bool|null $recursive
     * @param bool|null $ignoreIfNotExists
     */
    public function __construct(?bool $recursive = null, ?bool $ignoreIfNotExists = null)
    {
        $this->recursive = $recursive;
        $this->ignoreIfNotExists = $ignoreIfNotExists;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}