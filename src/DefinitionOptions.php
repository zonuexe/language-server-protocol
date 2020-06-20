<?php

namespace LanguageServerProtocol;

/**
 * Server Capabilities for a [DefinitionRequest](#DefinitionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class DefinitionOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param bool|null $workDoneProgress
     */
    public function __construct(?bool $workDoneProgress)
    {
        $this->workDoneProgress = $workDoneProgress;
    }
}