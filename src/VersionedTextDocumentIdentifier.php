<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * An identifier to denote a specific version of a text document.
 *
 * Mixins (implemented TS interfaces): TextDocumentIdentifier
 */
class VersionedTextDocumentIdentifier
{
    /**
     * The version number of this document. If a versioned text document identifier
     * is sent from the server to the client and the file is not open in the editor
     * (the server has not received an open notification before) the server can send
     * `null` to indicate that the version is unknown and the content on disk is the
     * truth (as speced with document content ownership).
     *
     * @var int|null
     */
    public $version;

    /**
     * The text document's uri.
     *
     * @var string
     */
    public $uri;

    /**
     * @param int|null $version
     * @param string $uri
     */
    public function __construct(string $uri, $version = null)
    {
        $this->version = $version;
        $this->uri = $uri;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
        ];
        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                continue;
            }
            foreach ($map[$key] as $className) {
               try {
                   $value = Invoke::new($className, $value);
                   continue;
               } catch (Exception $e) {
                   continue;
               }
            }
        }
        return Invoke::new(self::class, $array);
    }
        
}