<?php

declare(strict_types=1);

namespace Bolt\Twig\Extension;

use Bolt\Twig\Runtime;
use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

/**
 * Content record functionality Twig extension.
 */
class RecordExtension extends AbstractExtension
{
    /**
     * {@inheritdoc}
     */
    public function getFunctions()
    {
        $safe = ['is_safe' => ['html']];
        $env = ['needs_environment' => true];

        return [
            new TwigFunction('excerpt', [Runtime\RecordRuntime::class, 'excerpt'], $safe),
            new TwigFunction('listtemplates', [Runtime\RecordRuntime::class, 'dummy']),
            new TwigFunction('pager', [Runtime\RecordRuntime::class, 'dummy_with_env'], $env + $safe),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function getFilters()
    {
        $safe = ['is_safe' => ['html']];
        $deprecated = ['deprecated' => true];

        return [
            new TwigFilter('excerpt', [Runtime\RecordRuntime::class, 'excerpt'], $safe),
        ];
    }
}
