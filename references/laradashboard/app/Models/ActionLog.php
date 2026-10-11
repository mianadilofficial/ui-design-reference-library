<?php

declare(strict_types=1);

namespace App\Models;

use App\Enums\ActionType;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ActionLog extends Model
{
    protected $fillable = [
        'type',
        'action_by',
        'title',
        'data',
    ];

    public static function getActionTypes(): array
    {
        return collect(ActionType::cases())
            ->mapWithKeys(fn ($case) => [$case->value => Str::of($case->name)->title()])
            ->toArray();
    }

    /**
     * Get the user that performed the action.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo<\App\Models\User, $this>
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'action_by');
    }
}
