<x-layouts.backend-layout :breadcrumbs="$breadcrumbs">
    {!! Hook::ApplyFilters(RoleFilterHook::ROLE_CREATE_BEFORE_FORM, '') !!}

    <form
        action="{{ route('admin.roles.store') }}"
        method="POST"
        data-prevent-unsaved-changes
    >
        @csrf
        @include('backend.pages.roles.partials.form', ['role' => null])
    </form>

    {!! Hook::ApplyFilters(RoleFilterHook::ROLE_CREATE_AFTER_FORM, '') !!}
</x-layouts.backend-layout>