<?php

namespace LanguageServerProtocol;

class SignatureHelpContext
{
    /**
     * Action that caused signature help to be triggered.
     *
     * @var 1|2|3
     */
    public $triggerKind;

    /**
     * Character that caused signature help to be triggered.
     * 
     * This is undefined when `triggerKind !== SignatureHelpTriggerKind.TriggerCharacter`
     *
     * @var string
     */
    public $triggerCharacter;

    /**
     * `true` if signature help was already showing when it was triggered.
     * 
     * Retriggers occur when the signature help is already active and can be caused by actions such as
     * typing a trigger character, a cursor move, or document content changes.
     *
     * @var string
     */
    public $isRetrigger;

    /**
     * The currently active `SignatureHelp`.
     * 
     * The `activeSignatureHelp` has its `SignatureHelp.activeSignature` field updated based on
     * the user navigating through available signatures.
     *
     * @var SignatureHelp
     */
    public $activeSignatureHelp;

    /**
     * @param 1|2|3 $triggerKind
     * @param string $triggerCharacter
     * @param string $isRetrigger
     * @param SignatureHelp $activeSignatureHelp
     */
    public function __construct($triggerKind, string $triggerCharacter, string $isRetrigger, SignatureHelp $activeSignatureHelp)
    {
        $this->triggerKind = $triggerKind;
        $this->triggerCharacter = $triggerCharacter;
        $this->isRetrigger = $isRetrigger;
        $this->activeSignatureHelp = $activeSignatureHelp;
    }
}