<x-layouts.backend-layout :breadcrumbs="$breadcrumbs">
    <div class="space-y-6">
        <form method="POST" action="{{ route('admin.settings.store') }}" data-prevent-unsaved-changes>
            @csrf
            @include('backend.pages.settings.mcp-settings')

            <div class="mt-4">
                <x-buttons.submit-buttons :submit-label="__('Save Changes')" />
            </div>
        </form>
    </div>
</x-layouts.backend-layout>
