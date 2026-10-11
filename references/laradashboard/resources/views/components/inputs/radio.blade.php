@props([
    'label' => null,
    'name' => null,
    'checked' => false,
    'value' => null,
    'disabled' => false,
    'hint' => null,
])
<div class="flex items-center gap-2">
    <input type="radio" name="{{ $name }}" id="{{ $name }}_{{ $value }}" value="{{ $value }}" @if($checked || old($name) == $value) checked @endif @if($disabled) disabled @endif {{ $attributes->class(['form-checkbox']) }}>
    @if($label)
        <label for="{{ $name }}_{{ $value }}" class="form-label mb-0">{{ $label }}</label>
    @endif
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
