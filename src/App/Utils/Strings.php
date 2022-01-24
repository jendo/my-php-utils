<?php
declare(strict_types=1);

namespace App\Utils;

class Strings
{
    /**
     * @param string $url
     * @return array
     */
    public static function getUrlComponents(string $url): array
    {
        return parse_url($url);
    }
}