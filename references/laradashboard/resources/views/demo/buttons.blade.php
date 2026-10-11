<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Button Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Normal Buttons') }}"
        description="{{ __('Reusable button component supporting type and custom classes.') }}"
        path="views/demo/buttons/button.blade.php"
        include="demo.buttons.button"
    />

    <x-demo.preview-component
        title="{{ __('Loading Buttons') }}"
        path="views/demo/buttons/loading-buttons.blade.php"
        include="demo.buttons.loading-buttons"
    />

    <x-demo.preview-component
        title="{{ __('Action Button') }}"
        description="{{ __('Common action buttons for CRUD and navigation.') }}"
        path="views/demo/buttons/action-buttons.blade.php"
        include="demo.buttons.action-buttons"
    />

    <x-demo.preview-component
        title="{{ __('Submit Button') }}"
        path="views/demo/buttons/submit-buttons.blade.php"
        include="demo.buttons.submit-buttons"
    />

    <x-demo.preview-component
        title="{{ __('Drawer Close Button') }}"
        path="views/demo/buttons/drawer-close.blade.php"
        include="demo.buttons.drawer-close"
    />

    <x-demo.preview-component
        title="{{ __('Action Item Button') }}"
        path="views/demo/buttons/action-item.blade.php"
        include="demo.buttons.action-item"
    />
</div>
