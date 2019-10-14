<?php

namespace Helper\Sort;

class Contributors
{
    public static function sortByContributions(array $contributors): array
    {
        usort($contributors, function ($a, $b) {
            return $a['contribution'] < $b['contribution'];
        });

        return $contributors;
    }
}
