<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents reasons why a text document is saved.
 */
class TextDocumentWillSaveEvent
{
    /**
     * The document that will be saved
     *
     * @var TextDocument
     */
    public $document;

    /**
     * The reason why save was triggered.
     *
     * @var 1|2|3
     */
    public $reason;

    /**
     * @param TextDocument $document
     * @param 1|2|3 $reason
     */
    public function __construct(TextDocument $document, $reason)
    {
        $this->document = $document;
        $this->reason = $reason;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}