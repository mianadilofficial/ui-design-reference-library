@props([
    'label' => null,
    'name' => null,
    'checked' => false,
    'value' => 1,
    'disabled' => false,
    'hint' => null,
])
<div class="flex items-center gap-2">
    <input type="checkbox" name="{{ $name }}" id="{{ $name }}" value="{{ $value }}" @if($checked || old($name)) checked @endif @if($disabled) disabled @endif {{ $attributes->class(['form-checkbox']) }}>
    @if($label)
        <label for="{{ $name }}" class="form-label mb-0">{{ $label }}</label>
    @endif
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
