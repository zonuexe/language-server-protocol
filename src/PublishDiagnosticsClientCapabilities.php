<?php

namespace LanguageServerProtocol;

/**
 * The publish diagnostic client capabilities.
 */
class PublishDiagnosticsClientCapabilities
{
    /**
     * Whether the clients accepts diagnostics with related information.
     *
     * @var bool|null
     */
    public $relatedInformation;

    /**
     * Client supports the tag property to provide meta data about a diagnostic.
     * Clients supporting tags have to handle unknown tags gracefully.
     *
     * @var array<mixed>|null
     */
    public $tagSupport;

    /**
     * Whether the client interprets the version property of the
     * `textDocument/publishDiagnostics` notification`s parameter.
     *
     * @var bool|null
     */
    public $versionSupport;

    /**
     * @param bool|null $relatedInformation
     * @param array<mixed>|null $tagSupport
     * @param bool|null $versionSupport
     */
    public function __construct(?bool $relatedInformation, $tagSupport, ?bool $versionSupport)
    {
        $this->relatedInformation = $relatedInformation;
        $this->tagSupport = $tagSupport;
        $this->versionSupport = $versionSupport;
    }
}