<?php

declare(strict_types=1);

namespace PoP\Base36Definitions;

use PoP\Root\Component\AbstractComponent;
use PoP\Root\Component\YAMLServicesTrait;

/**
 * Initialize component
 */
class Component extends AbstractComponent
{
    use YAMLServicesTrait;
    // const VERSION = '0.1.0';

    public static function getDependedComponentClasses(): array
    {
        return [
            \PoP\Definitions\Component::class,
        ];
    }

    /**
     * Initialize services
     */
    protected static function doInitialize(bool $skipSchema = false): void
    {
        parent::doInitialize($skipSchema);
        self::initYAMLServices(dirname(__DIR__));
    }
}
