@props([
    'label' => null,
    'placeholder' => '',
    'hint' => null,
    'name' => null,
    'value' => null,
    'required' => false,
    'disabled' => false,
    'rows' => 3,
])
<div>
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <textarea
        name="{{ $name }}"
        id="{{ $name }}"
        rows="{{ $rows }}"
        placeholder="{{ $placeholder }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
        {{ $attributes->class(['form-control-textarea']) }}
    >{{ old($name, $value) }}</textarea>
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
