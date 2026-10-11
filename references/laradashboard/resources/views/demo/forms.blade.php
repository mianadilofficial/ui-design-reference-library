<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Form Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Text Inputs') }}"
        description="{{ __('Use the following component for text inputs: text, email, number, phone, search') }}"
        path="views/demo/forms/input.blade.php"
        include="demo.forms.input"
    />

    <x-demo.preview-component
        title="{{ __('Password Input') }}"
        path="views/demo/forms/password.blade.php"
        include="demo.forms.password"
    />

    <x-demo.preview-component
        title="{{ __('File Input') }}"
        path="views/demo/forms/file-input.blade.php"
        include="demo.forms.file-input"
    />

    <x-demo.preview-component
        title="{{ __('Media Selector') }}"
        path="views/demo/forms/media-selector.blade.php"
        include="demo.forms.media-selector"
    />

    <x-demo.preview-component
        title="{{ __('Select') }}"
        path="views/demo/forms/select.blade.php"
        include="demo.forms.select"
    />

    <x-demo.preview-component
        title="{{ __('Single select with search') }}"
        path="views/demo/forms/single-select.blade.php"
        include="demo.forms.single-select"
    />

    <x-demo.preview-component
        title="{{ __('Multi select') }}"
        path="views/demo/forms/multi-select.blade.php"
        include="demo.forms.multi-select"
    />

    <x-demo.preview-component
        title="{{ __('Checkbox') }}"
        path="views/demo/forms/checkbox.blade.php"
        include="demo.forms.checkbox"
    />

    <x-demo.preview-component
        title="{{ __('Radio') }}"
        path="views/demo/forms/radio.blade.php"
        include="demo.forms.radio"
    />

    <x-demo.preview-component
        title="{{ __('Textarea') }}"
        path="views/demo/forms/textarea.blade.php"
        include="demo.forms.textarea"
    />

    <x-demo.preview-component
        title="{{ __('Date Picker') }}"
        path="views/demo/forms/date-picker.blade.php"
        include="demo.forms.date-picker"
    />

    <x-demo.preview-component
        title="{{ __('DateTime Picker') }}"
        path="views/demo/forms/datetime-picker.blade.php"
        include="demo.forms.datetime-picker"
    />

    <x-demo.preview-component
        title="{{ __('Range Input') }}"
        path="views/demo/forms/range-input.blade.php"
        include="demo.forms.range-input"
    />

    <x-demo.preview-component
        title="{{ __('Input Group') }}"
        path="views/demo/forms/input-group.blade.php"
        include="demo.forms.input-group"
    />
</div>