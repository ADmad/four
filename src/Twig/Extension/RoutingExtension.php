<?php

declare(strict_types=1);

namespace Bolt\Twig\Extension;

use Bolt\Twig\Runtime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

/**
 * Routing functionality Twig extension.
 */
class RoutingExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        return [
            new TwigFunction('canonical', [Runtime\RoutingRuntime::class, 'dummy']),
            new TwigFunction('htmllang', [Runtime\RoutingRuntime::class, 'dummy']),
        ];
    }
}
