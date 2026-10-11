@props(['label' => null, 'prepend' => null, 'append' => null, 'id' => null])

@if($label)
    <label class="form-label mb-1" for="{{ $id }}">{{ $label }}</label>
@endif

<div class="form-input-group flex w-full">
    @if($prepend)
        <span class="inline-flex items-center px-3 border border-r-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-l-md">{{ $prepend }}</span>
    @endif
    <input
        id="{{ $id }}"
        {{ $attributes->merge(['class' => 'form-control flex-1 min-w-0 rounded-none']) }}
        @if($prepend && !$append)class="form-control flex-1 min-w-0 rounded-r-md"@endif
        @if(!$prepend && $append)class="form-control flex-1 min-w-0 rounded-l-md"@endif
        @if($prepend && $append)class="form-control flex-1 min-w-0 rounded-none"@endif
    >
    @if($append)
        <span class="inline-flex items-center px-3 border border-l-0 border-gray-300 bg-gray-50 text-gray-500 text-sm rounded-r-md">{{ $append }}</span>
    @endif
</div>
