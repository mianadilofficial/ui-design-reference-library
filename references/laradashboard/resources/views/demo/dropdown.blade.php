<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Dropdown Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Simple Dropdown Example') }}"
        path="views/demo/dropdown/dropdown.blade.php"
        include="demo.dropdown.dropdown"
    />

    <x-demo.preview-component
        title="{{ __('Checked like Dropdown') }}"
        path="views/demo/forms/single-select.blade.php"
        include="demo.forms.single-select"
    />

    <x-demo.preview-component
        title="{{ __('Searchable Multi Select Dropdown') }}"
        path="views/demo/forms/multi-select.blade.php"
        include="demo.forms.multi-select"
    />
</div>
