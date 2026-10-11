<div class="flex gap-4 flex-wrap">
    <x-buttons.button :loading="true" variant="primary">Primary</x-buttons.button>
    <x-buttons.button :loading="true" variant="success">Success</x-buttons.button>
    <x-buttons.button :loading="true" variant="danger">Danger</x-buttons.button>
    <x-buttons.button :loading="true" variant="warning">Warning</x-buttons.button>
    <x-buttons.button :loading="true" variant="info">Info</x-buttons.button>
    <x-buttons.button :loading="true" variant="secondary">Secondary</x-buttons.button>
    <x-buttons.button :loading="true">Default</x-buttons.button>
    <x-buttons.button :loading="true" class="bg-purple-600 hover:bg-purple-700 text-white">Custom Class</x-buttons.button>
    <x-buttons.button :loading="true" variant="primary" disabled>Disabled</x-buttons.button>
    <x-buttons.button :loading="true" as="a" href="https://laradashboard.com" variant="info">Link Button</x-buttons.button>
</div>
