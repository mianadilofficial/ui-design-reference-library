<x-layouts.backend-layout :breadcrumbs="$breadcrumbs">
    {!! Hook::ApplyFilters(RoleFilterHook::ROLE_EDIT_BEFORE_FORM, '') !!}

    <form
        action="{{ route('admin.roles.update', $role->id) }}"
        method="POST"
        data-prevent-unsaved-changes
    >
        @csrf
        @method('PUT')
        @include('backend.pages.roles.partials.form', ['role' => $role])
    </form>

    {!! Hook::ApplyFilters(RoleFilterHook::ROLE_EDIT_AFTER_FORM, '') !!}
</x-layouts.backend-layout>
