<?php // Auto-generated from vscode-languageserver-protocol (typescript)

namespace LanguageServerProtocol;

use DTL\Invoke\Invoke;
use Exception;
use RuntimeException;

class FoldingRangeClientCapabilities
{
    /**
     * Whether implementation supports dynamic registration for folding range providers. If this is set to `true`
     * the client supports the new `FoldingRangeRegistrationOptions` return value for the corresponding server
     * capability as well.
     *
     * @var bool|null
     */
    public $dynamicRegistration;

    /**
     * The maximum number of folding ranges that the client prefers to receive per document. The value serves as a
     * hint, servers are free to follow the limit.
     *
     * @var int|null
     */
    public $rangeLimit;

    /**
     * If set, the client signals that it only supports folding complete lines. If set, client will
     * ignore specified `startCharacter` and `endCharacter` properties in a FoldingRange.
     *
     * @var bool|null
     */
    public $lineFoldingOnly;

    /**
     * @param bool|null $dynamicRegistration
     * @param int|null $rangeLimit
     * @param bool|null $lineFoldingOnly
     */
    public function __construct(?bool $dynamicRegistration = null, ?int $rangeLimit = null, ?bool $lineFoldingOnly = null)
    {
        $this->dynamicRegistration = $dynamicRegistration;
        $this->rangeLimit = $rangeLimit;
        $this->lineFoldingOnly = $lineFoldingOnly;
    }

    /**
     * @param array<string,mixed> $array
     */
    public static function fromArray(array $array, bool $allowUnknownKeys = false): self
    {
        $map = [
            'dynamicRegistration' => ['names' => [], 'iterable' => false],
            'rangeLimit' => ['names' => [], 'iterable' => false],
            'lineFoldingOnly' => ['names' => [], 'iterable' => false],
        ];

        foreach ($array as $key => &$value) {
            if (!isset($map[$key])) {
                if ($allowUnknownKeys) {
                    unset($array[$key]);
                    continue;
                }

                throw new RuntimeException(sprintf(
                    'Parameter "%s" on class "%s" not known, known parameters: "%s"',
                    $key, 
                    self::class,
                    implode('", "', array_keys($map))
                ));
            }

            if (empty($map[$key]['names'])) {
                continue;
            }

            if ($map[$key]['iterable']) {
                $value = array_map(function ($object) use ($map, $key, $allowUnknownKeys) {
                    if (!is_array($object)) {
                        return $object;
                    }

                    return self::invokeFromNames($map[$key]['names'], $object, $allowUnknownKeys) ?: $object;
                }, $value);
                continue;
            }

            $names = $map[$key]['names'];
            $value = self::invokeFromNames($names, $value, $allowUnknownKeys) ?: $value;
        }
        
        return Invoke::new(self::class, $array);
    }

    /**
     * @param array<string> $classNames
     * @param array<string,mixed> $object
     */
    private static function invokeFromNames(array $classNames, array $object, bool $allowUnknownKeys): ?object
    {
        $lastException = null;
        foreach ($classNames as $className) {
            try {
                // @phpstan-ignore-next-line
                return call_user_func_array($className . '::fromArray', [$object, $allowUnknownKeys]);
            } catch (Exception $exception) {
                $lastException = $exception;
                continue;
            }
        }

        throw $lastException;
    }
        
}