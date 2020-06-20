<?php

namespace LanguageServerProtocol;

/**
 * The parameters of a [DocumentFormattingRequest](#DocumentFormattingRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressParams
 */
class DocumentFormattingParams
{
    /**
     * The document to format.
     *
     * @var TextDocumentIdentifier
     */
    public $textDocument;

    /**
     * The format options
     *
     * @var FormattingOptions
     */
    public $options;

    /**
     * An optional token that a server can use to report work done progress.
     *
     * @var int|string|null
     */
    public $workDoneToken;

    /**
     * @param TextDocumentIdentifier $textDocument
     * @param FormattingOptions $options
     * @param int|string|null $workDoneToken
     */
    public function __construct(TextDocumentIdentifier $textDocument, FormattingOptions $options, $workDoneToken = null)
    {
        $this->textDocument = $textDocument;
        $this->options = $options;
        $this->workDoneToken = $workDoneToken;
    }
}