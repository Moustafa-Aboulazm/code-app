<?php

namespace App\Enum;

enum DefaultData: int
{
    const ACTIVE = 1;

    const INACTIVE = 0;

    public static function toArray(): array
    {
        return [
            self::ACTIVE,
            self::INACTIVE,
        ];
    }

    public static function getName(int $value): string
    {
        return match ($value) {
            self::INACTIVE => __('api.inactive'),
            self::ACTIVE => __('api.active'),
            default => __('api.unknown')
        };
    }
}
