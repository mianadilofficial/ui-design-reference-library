<div x-data="{ open: false }">
    <button type="button" class="btn-default" @click="open = true">
        {{ __('Open Demo Modal') }}
    </button>
    <x-modal x-show="open">
        <x-slot name="header">
            {{ __('Modal Header') }}
        </x-slot>
        <div>
            <p>{{ __('This is a demo modal body. You can put any content here, including forms, text, or other components.') }}</p>
        </div>
        <x-slot name="footer">
            <button type="button" class="btn-default" @click="open = false">{{ __('Close') }}</button>
        </x-slot>
    </x-modal>
</div>