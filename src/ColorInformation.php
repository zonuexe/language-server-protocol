<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;

/**
 * Represents a color range from a document.
 */
class ColorInformation
{
    /**
     * The range in the document where this color appers.
     *
     * @var Range
     */
    public $range;

    /**
     * The actual color value for this color range.
     *
     * @var Color
     */
    public $color;

    /**
     * @param Range $range
     * @param Color $color
     */
    public function __construct(Range $range, Color $color)
    {
        $this->range = $range;
        $this->color = $color;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        return Invoke::new(self::class, $array);
    }
        
}