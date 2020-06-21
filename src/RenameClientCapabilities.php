<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;

class RenameClientCapabilities
{
    /**
     * Whether rename supports dynamic registration.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * Client supports testing for validity of rename operations
     * before execution.
     *
     * @var bool|null
     */
    public $prepareSupport;

    /**
     * @param bool|null $dynamicRegistration
     * @param bool|null $prepareSupport
     */
    public function __construct(?bool $dynamicRegistration = null, ?bool $prepareSupport = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->prepareSupport = $prepareSupport;
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