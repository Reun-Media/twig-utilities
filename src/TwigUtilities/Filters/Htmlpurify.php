<?php

declare(strict_types=1);

namespace Reun\TwigUtilities\Filters;

/**
 * HTML Purifier filter.
 *
 * @author Kimmo Salmela <kimmo.salmela@reun.eu>
 */
class Htmlpurify extends AbstractFilter
{
    private \HTMLPurifier $purifier;

    public function __construct(\HTMLPurifier $purifier)
    {
        $this->purifier = $purifier;
    }

    public function __invoke(string $raw): string
    {
        return $this->purifier->purify($raw);
    }

    public static function getOptions(): array
    {
        return ["is_safe" => ["html"]];
    }
}
