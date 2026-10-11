<?php

declare(strict_types=1);

namespace App\Concerns;

use App\Support\Facades\Hook;
use BackedEnum;

trait Hookable
{
    /**
     * Add action and filter hooks to an item.
     *
     * @param mixed $item
     * @param string|BackedEnum $actionHook
     * @param string|BackedEnum $filterHook
     *
     * @return mixed
     */
    public function addHooks($item, string|BackedEnum $actionHook = null, string|BackedEnum $filterHook = null)
    {
        if ($actionHook) {
            Hook::doAction($actionHook, $item);
        }

        if ($filterHook) {
            return Hook::applyFilters($filterHook, $item);
        }

        return $item;
    }
}
