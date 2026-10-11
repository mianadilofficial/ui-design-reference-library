<div class="flex">
    <x-media-selector
        name="featured_image"
        label="{{ __('Featured Image') }}"
        :multiple="false"
        allowedTypes="images"
        removeCheckboxName="remove_featured_image"
        removeCheckboxLabel="{{ __('Remove featured image') }}"
        :showPreview="true"
        class="mt-1"
    />
</div>