<?php

declare(strict_types=1);

namespace App\Contracts;

use Illuminate\Support\Collection;
use Spatie\MediaLibrary\HasMedia;

/**
 * Custom interface that extends Spatie's HasMedia interface
 * This ensures compatibility while allowing us to add our own methods
 *
 * @mixin \Illuminate\Database\Eloquent\Model
 */
interface HasMediaInterface extends HasMedia
{
    public function clearMediaCollection(string $collectionName = 'default'): HasMedia;

    public function clearMediaCollectionExcept(string $collectionName = 'default', array|Collection $excludedMedia = []): HasMedia;
}
