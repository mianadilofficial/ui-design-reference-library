<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Media Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Media Modal') }}"
        description="{{ __('Use the following component to open a media modal for selecting files.') }}"
        path="views/demo/media/media-modal-example.blade.php"
        include="demo.media.media-modal-example"
    />

    <x-demo.preview-component
        title="{{ __('Media Selector Button') }}"
        description="{{ __('Use the following component to select and preview media files.') }}"
        path="views/demo/media/media-selector-example.blade.php"
        include="demo.media.media-selector-example"
    />
</div>
