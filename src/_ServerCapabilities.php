<?php

namespace LanguageServerProtocol;

class _ServerCapabilities
{
    /**
     * Defines how text documents are synced. Is either a detailed structure defining each notification or
     * for backwards compatibility the TextDocumentSyncKind number.
     *
     * @var TextDocumentSyncOptions|0|1|2
     */
    public $textDocumentSync;

    /**
     * The server provides completion support.
     *
     * @var CompletionOptions
     */
    public $completionProvider;

    /**
     * The server provides hover support.
     *
     * @var string|HoverOptions
     */
    public $hoverProvider;

    /**
     * The server provides signature help support.
     *
     * @var SignatureHelpOptions
     */
    public $signatureHelpProvider;

    /**
     * The server provides Goto Declaration support.
     *
     * @var string|DeclarationOptions|DeclarationRegistrationOptions
     */
    public $declarationProvider;

    /**
     * The server provides goto definition support.
     *
     * @var string|DefinitionOptions
     */
    public $definitionProvider;

    /**
     * The server provides Goto Type Definition support.
     *
     * @var string|TypeDefinitionOptions|TypeDefinitionRegistrationOptions
     */
    public $typeDefinitionProvider;

    /**
     * The server provides Goto Implementation support.
     *
     * @var string|ImplementationOptions|ImplementationRegistrationOptions
     */
    public $implementationProvider;

    /**
     * The server provides find references support.
     *
     * @var string|ReferenceOptions
     */
    public $referencesProvider;

    /**
     * The server provides document highlight support.
     *
     * @var string|DocumentHighlightOptions
     */
    public $documentHighlightProvider;

    /**
     * The server provides document symbol support.
     *
     * @var string|DocumentSymbolOptions
     */
    public $documentSymbolProvider;

    /**
     * The server provides code actions. CodeActionOptions may only be
     * specified if the client states that it supports
     * `codeActionLiteralSupport` in its initial `initialize` request.
     *
     * @var string|CodeActionOptions
     */
    public $codeActionProvider;

    /**
     * The server provides code lens.
     *
     * @var CodeLensOptions
     */
    public $codeLensProvider;

    /**
     * The server provides document link support.
     *
     * @var DocumentLinkOptions
     */
    public $documentLinkProvider;

    /**
     * The server provides color provider support.
     *
     * @var string|DocumentColorOptions|DocumentColorRegistrationOptions
     */
    public $colorProvider;

    /**
     * The server provides workspace symbol support.
     *
     * @var string|WorkspaceSymbolOptions
     */
    public $workspaceSymbolProvider;

    /**
     * The server provides document formatting.
     *
     * @var string|DocumentFormattingOptions
     */
    public $documentFormattingProvider;

    /**
     * The server provides document range formatting.
     *
     * @var string|DocumentRangeFormattingOptions
     */
    public $documentRangeFormattingProvider;

    /**
     * The server provides document formatting on typing.
     *
     * @var DocumentOnTypeFormattingOptions
     */
    public $documentOnTypeFormattingProvider;

    /**
     * The server provides rename support. RenameOptions may only be
     * specified if the client states that it supports
     * `prepareSupport` in its initial `initialize` request.
     *
     * @var string|RenameOptions
     */
    public $renameProvider;

    /**
     * The server provides folding provider support.
     *
     * @var string|FoldingRangeOptions|FoldingRangeRegistrationOptions
     */
    public $foldingRangeProvider;

    /**
     * The server provides selection range support.
     *
     * @var string|SelectionRangeOptions|SelectionRangeRegistrationOptions
     */
    public $selectionRangeProvider;

    /**
     * The server provides execute command support.
     *
     * @var ExecuteCommandOptions
     */
    public $executeCommandProvider;

    /**
     * Experimental server capabilities.
     *
     * @var T
     */
    public $experimental;

    public function __construct(null $textDocumentSync, CompletionOptions $completionProvider, null $hoverProvider, SignatureHelpOptions $signatureHelpProvider, null $declarationProvider, null $definitionProvider, null $typeDefinitionProvider, null $implementationProvider, null $referencesProvider, null $documentHighlightProvider, null $documentSymbolProvider, null $codeActionProvider, CodeLensOptions $codeLensProvider, DocumentLinkOptions $documentLinkProvider, null $colorProvider, null $workspaceSymbolProvider, null $documentFormattingProvider, null $documentRangeFormattingProvider, DocumentOnTypeFormattingOptions $documentOnTypeFormattingProvider, null $renameProvider, null $foldingRangeProvider, null $selectionRangeProvider, ExecuteCommandOptions $executeCommandProvider, T $experimental)
    {
        $this->textDocumentSync = $textDocumentSync;
        $this->completionProvider = $completionProvider;
        $this->hoverProvider = $hoverProvider;
        $this->signatureHelpProvider = $signatureHelpProvider;
        $this->declarationProvider = $declarationProvider;
        $this->definitionProvider = $definitionProvider;
        $this->typeDefinitionProvider = $typeDefinitionProvider;
        $this->implementationProvider = $implementationProvider;
        $this->referencesProvider = $referencesProvider;
        $this->documentHighlightProvider = $documentHighlightProvider;
        $this->documentSymbolProvider = $documentSymbolProvider;
        $this->codeActionProvider = $codeActionProvider;
        $this->codeLensProvider = $codeLensProvider;
        $this->documentLinkProvider = $documentLinkProvider;
        $this->colorProvider = $colorProvider;
        $this->workspaceSymbolProvider = $workspaceSymbolProvider;
        $this->documentFormattingProvider = $documentFormattingProvider;
        $this->documentRangeFormattingProvider = $documentRangeFormattingProvider;
        $this->documentOnTypeFormattingProvider = $documentOnTypeFormattingProvider;
        $this->renameProvider = $renameProvider;
        $this->foldingRangeProvider = $foldingRangeProvider;
        $this->selectionRangeProvider = $selectionRangeProvider;
        $this->executeCommandProvider = $executeCommandProvider;
        $this->experimental = $experimental;
    }
}