<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Mixins (implemented TS interfaces): SelectionRangeOptions, TextDocumentRegistrationOptions, StaticRegistrationOptions
 */
class SelectionRangeRegistrationOptions
{
    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * A document selector to identify the scope of the registration. If set to null
     * the document selector provided on the client side will be used.
     *
     * @var array<(string|array<mixed>|array<mixed>|array<mixed>)>|null
     */
    public $documentSelector;

    /**
     * The id used to register the request. The id can be used to deregister
     * the request again. See also Registration#id.
     *
     * @var string|null
     */
    public $id;

    /**
     * @param bool|null $workDoneProgress
     * @param array<(string|array<mixed>|array<mixed>|array<mixed>)>|null $documentSelector
     * @param string|null $id
     */
    public function __construct(?bool $workDoneProgress = null, $documentSelector = null, ?string $id = null)
    {
        $this->workDoneProgress = $workDoneProgress;
        $this->documentSelector = $documentSelector;
        $this->id = $id;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
            'documentSelector' => [DocumentSelector::class],
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