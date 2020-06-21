<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * The parameters send in a will save text document notification.
 */
class WillSaveTextDocumentParams
{
    /**
     * The document that will be saved.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The 'TextDocumentSaveReason'.
     *
     * @var 1|2|3
     */
    public $reason;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param 1|2|3 $reason
     */
    public function __construct(TextDocumentIdentifier $textDocument, $reason)
    {
        $this->textDocument = $textDocument;
        $this->reason = $reason;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'textDocument' => [TextDocumentIdentifier::class],
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