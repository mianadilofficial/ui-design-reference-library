<?php

declare(strict_types=1);

namespace App\Concerns\Datatable;

use App\Enums\Hooks\DatatableHook;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

trait HasDatatableDelete
{
    public bool $enableLivewireDelete = true;

    public function getBulkDeleteAction(): array
    {
        return [
            'url' => $this->enableLivewireDelete ? '' : route('admin.' . Str::lower($this->getModelNamePlural()) . '.bulk-delete'),
            'method' => 'DELETE',
        ];
    }

    /**
     * Get the delete action config for a single item.
     */
    public function getDeleteAction(int $id): array
    {
        return [
            'url' => $this->enableLivewireDelete ? '' : route('admin.' . Str::lower($this->getModelNamePlural()) . '.destroy', $id),
            'method' => 'DELETE',
            'livewire' => $this->enableLivewireDelete,
            'id' => $id,
        ];
    }

    /**
     * Livewire method to delete a single item.
     */
    public function deleteItem($id): void
    {
        if (empty($id)) {
            $this->dispatch('notify', [
                'variant' => 'error',
                'title' => __('Delete Failed'),
                'message' => __('No :item selected for deletion.', ['item' => $this->getModelNameSingular()]),
            ]);
            return;
        }

        $modelClass = $this->getModelClass();
        $item = $modelClass::find($id);
        if (! $item) {
            $this->dispatch('notify', [
                'variant' => 'error',
                'title' => __('Delete Failed'),
                'message' => __(':item not found.', ['item' => $this->getModelNameSingular()]),
            ]);
            return;
        }

        // Optionally allow child to override deletion logic.
        try {
            $this->handleRowDelete($item);

            $this->dispatch('notify', [
                'variant' => 'success',
                'title' => __('Delete Successful'),
                'message' => __(':item deleted successfully.', ['item' => $this->getModelNameSingular()]),
            ]);
        } catch (\Exception $exception) {
            $this->dispatch('notify', [
                'variant' => 'error',
                'title' => __('Delete Failed'),
                'message' => __($exception->getMessage()),
            ]);
        }

        $this->resetPage();
    }

    public function bulkDelete(): void
    {
        $ids = $this->selectedItems;
        $ids = array_filter($ids, 'is_numeric');

        if (empty($ids)) {
            $this->dispatch('notify', [
                'variant' => 'error',
                'title' => __('Bulk Delete Failed'),
                'message' => __('No :items selected for deletion.', ['items' => $this->getModelNamePlural()]),
            ]);
            return;
        }

        $bulkDeleteAction = $this->getBulkDeleteAction();
        if (! empty($bulkDeleteAction['url'])) {
            // If a bulk delete route is defined, redirect or make an HTTP request (could be AJAX in JS, here just emit event)
            $this->dispatch('bulkDeleteRequest', [
                'url' => $bulkDeleteAction['url'],
                'method' => $bulkDeleteAction['method'],
                'ids' => $ids,
            ]);
            return;
        }

        $ids = $this->addHooks(
            $ids,
            DatatableHook::BEFORE_BULK_DELETE_ACTION,
            DatatableHook::BEFORE_BULK_DELETE_FILTER
        );

        $deletedCount = $this->addHooks(
            $this->handleBulkDelete($ids),
            DatatableHook::AFTER_BULK_DELETE_ACTION,
            DatatableHook::AFTER_BULK_DELETE_FILTER
        );

        if ($deletedCount > 0) {
            $this->dispatch('notify', [
                'variant' => 'success',
                'title' => __('Bulk Delete Successful'),
                'message' => __(':count items deleted successfully', ['count' => $deletedCount]),
            ]);
        } else {
            $this->dispatch('notify', [
                'variant' => 'error',
                'title' => __('Bulk Delete Failed'),
                'message' => __('No :items were deleted. Selected items may include protected records.', ['items' => $this->getModelNamePlural()]),
            ]);
        }

        $this->selectedItems = [];
        $this->dispatch('resetSelectedItems');
        $this->resetPage();
    }

    protected function handleBulkDelete(array $ids): int
    {
        $modelClass = $this->getModelClass();
        $items = $modelClass::whereIn('id', $ids)->get();
        $deletedCount = 0;

        foreach ($items as $item) {
            $this->authorize('delete', $item);

            $item->delete();

            $deletedCount++;
        }

        return $deletedCount;
    }

    protected function handleRowDelete(Model $item): bool
    {
        $this->authorize('delete', $item);

        $this->addHooks(
            $item,
            DatatableHook::BEFORE_DELETE_ACTION,
            DatatableHook::BEFORE_DELETE_FILTER
        );

        $deleted = $item->delete();

        $this->addHooks(
            $item,
            DatatableHook::AFTER_DELETE_ACTION,
            DatatableHook::AFTER_DELETE_FILTER
        );

        return $deleted;
    }
}
