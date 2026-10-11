@foreach ($user->roles as $role)
    <span class="capitalize badge">
        @if (auth()->user()->can('role.edit'))
            <a href="{{ route('admin.roles.edit', $role->id) }}" data-tooltip-target="tooltip-role-{{ $role->id }}-{{ $user->id }}" class="hover:text-primary">
                {{ $role->name }}
            </a>
            <div id="tooltip-role-{{ $role->id }}-{{ $user->id }}" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-md shadow-xs opacity-0 tooltip dark:bg-gray-700">
                {{ __('Edit') }} {{ $role->name }} {{ __('Role') }}
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        @else
            {{ $role->name }}
        @endif
    </span>
@endforeach