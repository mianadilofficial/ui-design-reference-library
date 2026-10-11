<?php

declare(strict_types=1);

namespace App\Support\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Hook Facade
 *
 * Provides a clean interface for WordPress-style hooks and filters.
 *
 * @method static void doAction(\BackedEnum|string $tag, ...$args)
 * @method static void addAction(\BackedEnum|string $tag, callable $function_to_add, int $priority = 20, int $accepted_args = 1)
 * @method static bool removeAction(\BackedEnum|string $tag, callable $function_to_remove, int $priority = 20)
 * @method static mixed applyFilters(\BackedEnum|string $tag, $value, ...$args)
 * @method static void addFilter(\BackedEnum|string $tag, callable $function_to_add, int $priority = 20, int $accepted_args = 1)
 * @method static bool removeFilter(\BackedEnum|string $tag, callable $function_to_remove, int $priority = 20)
 */
class Hook extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'hook';
    }
}
