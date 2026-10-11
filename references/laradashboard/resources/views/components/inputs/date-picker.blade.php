@props([
    'label' => null,
    'name' => null,
    'value' => null,
    'placeholder' => '',
    'hint' => null,
    'required' => false,
    'disabled' => false,
    'min' => null,
    'max' => null,
])
<div>
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <input
        type="text"
        name="{{ $name }}"
        id="{{ $name }}"
        value="{{ old($name, $value) }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
        @if($min) min="{{ $min }}" @endif
        @if($max) max="{{ $max }}" @endif
        {{ $attributes->class(['form-control', 'datepicker']) }}
        x-data
        x-init="flatpickr($el, { enableTime: false, dateFormat: 'Y-m-d' })"
        autocomplete="off"
    >
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
