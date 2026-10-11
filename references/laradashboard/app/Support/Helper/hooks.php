<?php

declare(strict_types=1);

use TorMorten\Eventy\Facades\Events as Eventy;

/**
 * Add action to Eventy.
 *
 * This is a WordPress like add_action hook implementation.
 *
 * @see https://github.com/tormjens/eventy
 *
 * @param  \BackedEnum|string  $hookName
 * @param  mixed  $callback
 * @param  mixed  $priority
 * @param  mixed  $args
 * @return void
 */
if (! function_exists('ld_add_action')) {
    function ld_add_action(\BackedEnum|string $hookName, $callback, $priority = 20, $args = 1)
    {
        $hook = $hookName instanceof \BackedEnum ? $hookName->value : $hookName;
        Eventy::addAction($hook, $callback, $priority, $args);
    }
}

/**
 * Do action in Eventy.
 *
 * This is a WordPress like do_action hook implementation.
 *
 * @see https://github.com/tormjens/eventy
 *
 * @param  \BackedEnum|string  $hookName
 * @param  mixed  ...$args
 */
if (! function_exists('ld_do_action')) {
    function ld_do_action(\BackedEnum|string $hookName, ...$args): void
    {
        $hook = $hookName instanceof \BackedEnum ? $hookName->value : $hookName;

        if (count($args) === 0) {
            Eventy::action($hook);
        } elseif (count($args) === 1) {
            Eventy::action($hook, $args[0]);
        } else {
            // Handle multiple arguments by passing them as an array
            Eventy::action($hook, $args);
        }
    }
}

/**
 * Apply filters in Eventy.
 *
 * This is a WordPress like apply_filters hook implementation.
 *
 * @see https://github.com/tormjens/eventy
 *
 * @param  \BackedEnum|string  $hookName
 * @param  mixed  $value
 * @param  mixed  $args
 * @return mixed
 */
if (! function_exists('ld_apply_filters')) {
    function ld_apply_filters(\BackedEnum|string $hookName, $value, $args = null)
    {
        $hook = $hookName instanceof \BackedEnum ? $hookName->value : $hookName;
        return Eventy::filter($hook, $value, $args);
    }
}

/**
 * Add filter to Eventy.
 *
 * This is a WordPress like add_filter hook implementation.
 *
 * @see https://github.com/tormjens/eventy
 *
 * @param  \BackedEnum|string  $hookName
 * @param  mixed  $callback
 * @param  mixed  $priority
 * @param  mixed  $args
 * @return mixed
 */
if (! function_exists('ld_add_filter')) {
    function ld_add_filter(\BackedEnum|string $hookName, $callback, $priority = 20, $args = 1)
    {
        $hook = $hookName instanceof \BackedEnum ? $hookName->value : $hookName;
        return Eventy::addFilter($hook, $callback, $priority, $args);
    }
}
