<?php

declare(strict_types=1);

namespace App\Support;

use TorMorten\Eventy\Facades\Events as Eventy;

/**
 * Hook Service
 *
 * Provides WordPress-style hooks and filters functionality.
 */
class HookManager
{
    /**
     * Calls all functions attached to an action hook.
     *
     * @param \BackedEnum|string $tag The name of the action to be executed.
     * @param mixed ...$args Optional. Additional arguments which are passed on to the functions hooked to the action.
     * @return void
     */
    public function doAction(\BackedEnum|string $tag, ...$args): void
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        Eventy::action($hook, ...$args);
    }

    /**
     * Hooks a function on to a specific action.
     *
     * @param \BackedEnum|string $tag The name of the action to which the $function_to_add is hooked.
     * @param callable $function_to_add The name of the function you wish to be called.
     * @param int $priority Optional. Used to specify the order in which the functions are executed. Default 20.
     * @param int $accepted_args Optional. The number of arguments the function accepts. Default 1.
     * @return void
     */
    public function addAction(\BackedEnum|string $tag, callable $function_to_add, int $priority = 20, int $accepted_args = 1): void
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        Eventy::addAction($hook, $function_to_add, $priority, $accepted_args);
    }

    /**
     * Removes a function from a specified action hook.
     *
     * @param \BackedEnum|string $tag The action hook to which the function to be removed is hooked.
     * @param callable $function_to_remove The name of the function which should be removed.
     * @param int $priority Optional. The priority of the function. Default 20.
     * @return void
     */
    public function removeAction(\BackedEnum|string $tag, callable $function_to_remove, int $priority = 20): void
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        Eventy::removeAction($hook, $function_to_remove, $priority);
    }

    /**
     * Call the functions added to a filter hook.
     *
     * @param \BackedEnum|string $tag The name of the filter hook.
     * @param mixed $value The value on which the filters hooked to $tag are applied on.
     * @param mixed ...$args Optional. Additional variables passed to the functions hooked to $tag.
     * @return mixed The filtered value after all hooked functions are applied to it.
     */
    public function applyFilters(\BackedEnum|string $tag, $value, ...$args)
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        return Eventy::filter($hook, $value, ...$args);
    }

    /**
     * Hooks a function to a specific filter hook.
     *
     * @param \BackedEnum|string $tag The name of the filter to hook the $function_to_add callback to.
     * @param callable $function_to_add The callback to be run when the filter is applied.
     * @param int $priority Optional. Used to specify the order in which the functions are executed. Default 20.
     * @param int $accepted_args Optional. The number of arguments the function accepts. Default 1.
     * @return void
     */
    public function addFilter(\BackedEnum|string $tag, callable $function_to_add, int $priority = 20, int $accepted_args = 1): void
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        Eventy::addFilter($hook, $function_to_add, $priority, $accepted_args);
    }

    /**
     * Removes a function from a specified filter hook.
     *
     * @param \BackedEnum|string $tag The filter hook to which the function to be removed is hooked.
     * @param callable $function_to_remove The name of the function which should be removed.
     * @param int $priority Optional. The priority of the function. Default 20.
     * @return void
     */
    public function removeFilter(\BackedEnum|string $tag, callable $function_to_remove, int $priority = 20): void
    {
        $hook = $tag instanceof \BackedEnum ? $tag->value : $tag;
        Eventy::removeFilter($hook, $function_to_remove, $priority);
    }
}
