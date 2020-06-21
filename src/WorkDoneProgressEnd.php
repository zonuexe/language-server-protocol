<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

class WorkDoneProgressEnd
{
    /**
     *
     * @var 'end'
     */
    public $kind;

    /**
     * Optional, a final message indicating to for example indicate the outcome
     * of the operation.
     *
     * @var string|null
     */
    public $message;

    /**
     * @param 'end' $kind
     * @param string|null $message
     */
    public function __construct($kind, ?string $message = null)
    {
        $this->kind = $kind;
        $this->message = $message;
    }

    /**
     * @param array<mixed> $array
     */
    public static function fromArray(array $array): self
    {
        $map = [
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