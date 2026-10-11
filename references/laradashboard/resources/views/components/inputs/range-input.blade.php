@props([
    'label' => null,
    'name' => null,
    'min' => 0,
    'max' => 100,
    'step' => 1,
    'value' => null,
    'hint' => null,
])
<div>
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <input type="range" name="{{ $name }}" id="{{ $name }}" min="{{ $min }}" max="{{ $max }}" step="{{ $step }}" value="{{ old($name, $value) }}" {{ $attributes->class(['form-control']) }}>
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
