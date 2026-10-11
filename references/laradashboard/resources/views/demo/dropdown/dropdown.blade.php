@php
    $dropdownDemoOptions = [
        ['value' => 'admin', 'label' => 'Admin'],
        ['value' => 'editor', 'label' => 'Editor'],
        ['value' => 'viewer', 'label' => 'Viewer'],
    ];
@endphp

<x-dropdown
    :options="$dropdownDemoOptions"
    name="role"
    label="Select Role"
    selected="editor"
    placeholder="Choose a role"
    required
    class="max-w-xs"
/>