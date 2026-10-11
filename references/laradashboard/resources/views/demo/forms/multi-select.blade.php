<x-inputs.combobox
    name="roles[]"
    label="Roles (Multi Select)"
    :options="[
        ['value' => 'admin', 'label' => 'Admin'],
        ['value' => 'editor', 'label' => 'Editor'],
        ['value' => 'viewer', 'label' => 'Viewer']
    ]"
    placeholder="Select roles"
    hint="Type to search roles."
    :searchable="true"
    :multiple="true"
/>