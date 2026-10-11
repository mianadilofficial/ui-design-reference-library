<div x-data="{ open: false }" class="inline-block">
    <button type="button" class="btn-default" @click="open = true">
        {{ __('View Details') }}
        <iconify-icon icon="lucide:expand" class="transition-transform ml-2" :class="{ 'rotate-180': open }"></iconify-icon>
    </button>

    <x-modal x-bind:open="open">
        <x-slot name="header">
            {{ __('Log Details') }}
        </x-slot>
        <pre class="bg-gray-100 dark:bg-gray-800 rounded p-4 text-xs overflow-auto max-h-96"><code>{{ json_encode(json_decode($log->data), JSON_PRETTY_PRINT) }}</code></pre>
    </x-modal>
</div>


