<?php

namespace App\Twig;

use Twig\Extension\AbstractExtension;
use Twig\TwigFilter;
use Twig\TwigFunction;

class AppExtension extends AbstractExtension
{
    public function getFunctions(): array
    {
        return [
            new TwigFunction('helloworld', [AppRuntime::class, 'helloworld']),
            new TwigFunction('calculateAge', [AppRuntime::class, 'calculateAge']),
        ];
    }

    public function getFilters(): array
    {
        return [
            new TwigFilter('helloworld', [AppRuntime::class, 'helloworld']),
            new TwigFilter('calculateAge', [AppRuntime::class, 'calculateAge']),
        ];
    }
}