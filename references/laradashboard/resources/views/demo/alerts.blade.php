<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Alert Components') }}
</h3>

<div class="space-y-6 mb-12">
    <x-demo.preview-component
        title="{{ __('Error Alert') }}"
        description="{{ __('Shows an error alert message.') }}"
        path="views/demo/alerts/error.blade.php"
        include="demo.alerts.error"
    />

    <x-demo.preview-component
        title="{{ __('Errors Alert (Validation)') }}"
        description="{{ __('Shows validation errors alert.') }}"
        path="views/demo/alerts/errors.blade.php"
        include="demo.alerts.errors"
    />

    <x-demo.preview-component
        title="{{ __('Success Alert') }}"
        description="{{ __('Shows a success alert message.') }}"
        path="views/demo/alerts/success.blade.php"
        include="demo.alerts.success"
    />

    <x-demo.preview-component
        title="{{ __('Info Alert') }}"
        description="{{ __('Shows an info alert message.') }}"
        path="views/demo/alerts/info.blade.php"
        include="demo.alerts.info"
    />

    <x-demo.preview-component
        title="{{ __('Warning Alert') }}"
        description="{{ __('Shows a warning alert message.') }}"
        path="views/demo/alerts/warning.blade.php"
        include="demo.alerts.warning"
    />

    <x-demo.preview-component
        title="{{ __('Default Alert') }}"
        description="{{ __('Shows a default alert message.') }}"
        path="views/demo/alerts/default.blade.php"
        include="demo.alerts.default"
    />
</div>
