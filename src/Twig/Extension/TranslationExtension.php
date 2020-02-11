<?php

namespace App\Twig\Extension;

use Twig\Extension\AbstractExtension;
use Twig\TwigFunction;

class TranslationExtension extends AbstractExtension
{
    public function getFunctions()
    {
        return [
            new TwigFunction('lang', [$this, 'getLang']),
        ];
    }

    public function getLang($lang)
    {
        return $lang;
    }
}