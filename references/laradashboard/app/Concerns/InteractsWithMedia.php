<?php

declare(strict_types=1);

namespace App\Concerns;

use Spatie\MediaLibrary\HasMedia;
use Illuminate\Support\Collection;

/**
 * Custom implementation of Spatie's InteractsWithMedia trait
 * This ensures method compatibility with both our HasMediaInterface and Spatie's HasMedia
 */
trait InteractsWithMedia
{
    use \Spatie\MediaLibrary\InteractsWithMedia {
        clearMediaCollection as spatieMediaClearMediaCollection;
        clearMediaCollectionExcept as spatieMediaClearMediaCollectionExcept;
    }

    /**
     * Override clearMediaCollection to return HasMedia interface for compatibility
     */
    public function clearMediaCollection(string $collectionName = 'default'): HasMedia
    {
        $this->spatieMediaClearMediaCollection($collectionName);

        return $this;
    }

    /**
     * Override clearMediaCollectionExcept to return HasMedia interface for compatibility
     */
    public function clearMediaCollectionExcept(string $collectionName = 'default', array|Collection $excludedMedia = []): HasMedia
    {
        $this->spatieMediaClearMediaCollectionExcept($collectionName, $excludedMedia);

        return $this;
    }
}
