<?php

namespace LanguageServerProtocol;

/**
 * Provider options for a [DocumentLinkRequest](#DocumentLinkRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DocumentLinkOptions
{
    /**
     * Document links have a resolve provider as well.
     *
     * @var bool|null
     */
    public $resolveProvider;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $resolveProvider
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $resolveProvider, ?bool $workDoneProgress)
    {
        $this->resolveProvider = $resolveProvider;
        $this->workDoneProgress = $workDoneProgress;
    }
}