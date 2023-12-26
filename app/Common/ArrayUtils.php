<?php

declare(strict_types=1);

namespace App\Common;

final class ArrayUtils
{
    public static function getMissingKeys(array $array, array $requiredKeys): array
    {
        return array_keys(array_diff_key(
            array_flip($requiredKeys),
            $array
        ));
    }

    /**
     * @param array $keysMap ['fromKey' => 'toKey']
     */
    public static function mapKeys(array $data, array $keysMap): array
    {
        foreach ($keysMap as $fromKey => $toKey) {
            if (array_key_exists($fromKey, $data)) {
                $data[$toKey] = $data[$fromKey];

                unset($data[$fromKey]);
            }
        }

        return $data;
    }
}
