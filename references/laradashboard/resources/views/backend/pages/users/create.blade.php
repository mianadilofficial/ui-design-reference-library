<x-layouts.backend-layout :breadcrumbs="$breadcrumbs">
    <x-card>
        <form
            action="{{ route('admin.users.store') }}"
            method="POST"
            enctype="multipart/form-data"
            data-prevent-unsaved-changes
        >
            @csrf

            @include('backend.pages.users.partials.form', [
                'user' => null,
                'roles' => $roles,
                'timezones' => $timezones ?? [],
                'locales' => $locales ?? [],
                'userMeta' => [],
                'mode' => 'create',
                'showUsername' => true,
                'showRoles' => true,
                'showAdditional' => false,
                'showImage' => false,
            ])
        </form>
    </x-card>
</x-layouts.backend-layout>
