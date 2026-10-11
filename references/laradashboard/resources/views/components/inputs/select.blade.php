@props([
    'label' => null,
    'placeholder' => '',
    'hint' => null,
    'name' => null,
    'options' => [],
    'value' => null,
    'required' => false,
    'disabled' => false,
])
<div>
    @if($label)
        <label class="form-label" for="{{ $name }}">{{ $label }}</label>
    @endif
    <select
        name="{{ $name }}"
        id="{{ $name }}"
        @if($required) required @endif
        @if($disabled) disabled @endif
        {{ $attributes->class(['form-control']) }}
    >
        @if($placeholder)
            <option value="" disabled selected>{{ $placeholder }}</option>
        @endif
        @foreach($options as $key => $option)
            <option value="{{ $key }}" @selected($key == old($name, $value))>{{ $option }}</option>
        @endforeach
    </select>
    @if($hint)
        <div class="text-xs text-gray-400 mt-1">{{ $hint }}</div>
    @endif
</div>
