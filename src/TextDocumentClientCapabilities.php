<?php

namespace LanguageServerProtocol;

class TextDocumentClientCapabilities
{
    /**
     * Defines which synchronization capabilities the client supports.
     *
     * @var TextDocumentSyncClientCapabilities
     */
    public $synchronization;

    /**
     * Capabilities specific to the `textDocument/completion`
     *
     * @var CompletionClientCapabilities
     */
    public $completion;

    /**
     * Capabilities specific to the `textDocument/hover`
     *
     * @var HoverClientCapabilities
     */
    public $hover;

    /**
     * Capabilities specific to the `textDocument/signatureHelp`
     *
     * @var SignatureHelpClientCapabilities
     */
    public $signatureHelp;

    /**
     * Capabilities specific to the `textDocument/declaration`
     *
     * @var DeclarationClientCapabilities
     */
    public $declaration;

    /**
     * Capabilities specific to the `textDocument/definition`
     *
     * @var DefinitionClientCapabilities
     */
    public $definition;

    /**
     * Capabilities specific to the `textDocument/typeDefinition`
     *
     * @var TypeDefinitionClientCapabilities
     */
    public $typeDefinition;

    /**
     * Capabilities specific to the `textDocument/implementation`
     *
     * @var ImplementationClientCapabilities
     */
    public $implementation;

    /**
     * Capabilities specific to the `textDocument/references`
     *
     * @var ReferenceClientCapabilities
     */
    public $references;

    /**
     * Capabilities specific to the `textDocument/documentHighlight`
     *
     * @var DocumentHighlightClientCapabilities
     */
    public $documentHighlight;

    /**
     * Capabilities specific to the `textDocument/documentSymbol`
     *
     * @var DocumentSymbolClientCapabilities
     */
    public $documentSymbol;

    /**
     * Capabilities specific to the `textDocument/codeAction`
     *
     * @var CodeActionClientCapabilities
     */
    public $codeAction;

    /**
     * Capabilities specific to the `textDocument/codeLens`
     *
     * @var CodeLensClientCapabilities
     */
    public $codeLens;

    /**
     * Capabilities specific to the `textDocument/documentLink`
     *
     * @var DocumentLinkClientCapabilities
     */
    public $documentLink;

    /**
     * Capabilities specific to the `textDocument/documentColor`
     *
     * @var DocumentColorClientCapabilities
     */
    public $colorProvider;

    /**
     * Capabilities specific to the `textDocument/formatting`
     *
     * @var DocumentFormattingClientCapabilities
     */
    public $formatting;

    /**
     * Capabilities specific to the `textDocument/rangeFormatting`
     *
     * @var DocumentRangeFormattingClientCapabilities
     */
    public $rangeFormatting;

    /**
     * Capabilities specific to the `textDocument/onTypeFormatting`
     *
     * @var DocumentOnTypeFormattingClientCapabilities
     */
    public $onTypeFormatting;

    /**
     * Capabilities specific to the `textDocument/rename`
     *
     * @var RenameClientCapabilities
     */
    public $rename;

    /**
     * Capabilities specific to `textDocument/foldingRange` requests.
     *
     * @var FoldingRangeClientCapabilities
     */
    public $foldingRange;

    /**
     * Capabilities specific to `textDocument/selectionRange` requests
     *
     * @var SelectionRangeClientCapabilities
     */
    public $selectionRange;

    /**
     * Capabilities specific to `textDocument/publishDiagnostics`.
     *
     * @var PublishDiagnosticsClientCapabilities
     */
    public $publishDiagnostics;

    public function __construct(TextDocumentSyncClientCapabilities $synchronization, CompletionClientCapabilities $completion, HoverClientCapabilities $hover, SignatureHelpClientCapabilities $signatureHelp, DeclarationClientCapabilities $declaration, DefinitionClientCapabilities $definition, TypeDefinitionClientCapabilities $typeDefinition, ImplementationClientCapabilities $implementation, ReferenceClientCapabilities $references, DocumentHighlightClientCapabilities $documentHighlight, DocumentSymbolClientCapabilities $documentSymbol, CodeActionClientCapabilities $codeAction, CodeLensClientCapabilities $codeLens, DocumentLinkClientCapabilities $documentLink, DocumentColorClientCapabilities $colorProvider, DocumentFormattingClientCapabilities $formatting, DocumentRangeFormattingClientCapabilities $rangeFormatting, DocumentOnTypeFormattingClientCapabilities $onTypeFormatting, RenameClientCapabilities $rename, FoldingRangeClientCapabilities $foldingRange, SelectionRangeClientCapabilities $selectionRange, PublishDiagnosticsClientCapabilities $publishDiagnostics)
    {
        $this->synchronization = $synchronization;
        $this->completion = $completion;
        $this->hover = $hover;
        $this->signatureHelp = $signatureHelp;
        $this->declaration = $declaration;
        $this->definition = $definition;
        $this->typeDefinition = $typeDefinition;
        $this->implementation = $implementation;
        $this->references = $references;
        $this->documentHighlight = $documentHighlight;
        $this->documentSymbol = $documentSymbol;
        $this->codeAction = $codeAction;
        $this->codeLens = $codeLens;
        $this->documentLink = $documentLink;
        $this->colorProvider = $colorProvider;
        $this->formatting = $formatting;
        $this->rangeFormatting = $rangeFormatting;
        $this->onTypeFormatting = $onTypeFormatting;
        $this->rename = $rename;
        $this->foldingRange = $foldingRange;
        $this->selectionRange = $selectionRange;
        $this->publishDiagnostics = $publishDiagnostics;
    }
}