<?php

namespace LanguageServerProtocol;

/**
 * Signature help represents the signature of something
 * callable. There can be multiple signature but only one
 * active and only one active parameter.
 */
class SignatureHelp
{
    /**
     * One or more signatures.
     *
     * @var array<SignatureInformation>
     */
    public $signatures;

    /**
     * The active signature. Set to `null` if no
     * signatures exist.
     *
     * @var int|null
     */
    public $activeSignature;

    /**
     * The active parameter of the active signature. Set to `null`
     * if the active signature has no parameters.
     *
     * @var int|null
     */
    public $activeParameter;

    /**
     * @param array<SignatureInformation> $signatures
     * @param int|null $activeSignature
     * @param int|null $activeParameter
     */
    public function __construct(array $signatures, $activeSignature, $activeParameter)
    {
        $this->signatures = $signatures;
        $this->activeSignature = $activeSignature;
        $this->activeParameter = $activeParameter;
    }
}