<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

/**
 * Provider options for a [CodeActionRequest](#CodeActionRequest).
 *
 * Mixins (implemented TS interfaces): WorkDoneProgressOptions
 */
class CodeActionOptions
{
    /**
     * CodeActionKinds that this server may return.
     * 
     * The list of kinds may be generic, such as `CodeActionKind.Refactor`, or the server
     * may list out every specific kind they provide.
     *
     * @var array<string>|null
     */
    public $codeActionKinds;

    /**
     *
     * @var bool|null
     */
    public $workDoneProgress;

    /**
     * @param array<string>|null $codeActionKinds
     * @param bool|null $workDoneProgress
     */
    public function __construct(?array $codeActionKinds = null, ?bool $workDoneProgress = null)
    {
        $this->codeActionKinds = $codeActionKinds;
        $this->workDoneProgress = $workDoneProgress;
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