<?php

namespace App\Twig;

use Twig\Extension\RuntimeExtensionInterface;

class AppRuntime implements RuntimeExtensionInterface
{
    public function __construct()
    {
        // this simple example doesn't define any dependency, but in your own
        // extensions, you'll need to inject services using this constructor
    }

    public function helloworld(string $name): string
    {
        return 'Hello '.$name.'!';
    }

    public function calculateAge(\DateTimeInterface $birthDate): int
    {
        $today = new \DateTime();
        $age = $today->diff($birthDate)->y;

        return $age;
    }
}