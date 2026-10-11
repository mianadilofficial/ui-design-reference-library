<div x-data="{ open: false }">
    <button type="button" class="btn-default" @click="open = true">
        {{ __('Open Demo Modal') }}
    </button>
    <x-modal x-show="open">
        <p>{{ __('This is a demo modal body. You can put any content here, including forms, text, or other components.') }}</p>
    </x-modal>
</div>