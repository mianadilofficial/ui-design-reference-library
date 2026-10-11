<div x-data="{ showAll: false }">
    <div>
        @foreach ($role->permissions->take(7) as $permission)
            <span class="badge">{{ $permission->name }}</span>
        @endforeach

        <template x-if="showAll">
            <div>
                @foreach ($role->permissions->skip(7) as $permission)
                    <span class="badge">{{ $permission->name }}</span>
                @endforeach
            </div>
        </template>
    </div>

    @if ($role->permissions->count() > 7)
        <button @click="showAll = !showAll" class="text-primary text-sm mt-2">
            <span x-show="!showAll">+{{ $role->permissions->count() - 7 }} {{ __('more') }}</span>
            <span x-show="showAll">{{ __('Show less') }}</span>
        </button>
    @endif
</div>