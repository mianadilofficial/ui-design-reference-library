<div class="flex">
    <x-media-selector
        name="demo_featured_image"
        label="Demo Featured Image"
        :multiple="false"
        allowedTypes="images"
        buttonText="Select Demo Image"
        :showPreview="true"
        :showNoSelection="true"
        :showPreviewCircular="true"
        emptyText="No Demo Media Selected"
    />
</div>