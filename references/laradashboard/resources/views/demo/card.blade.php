<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Card Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Simple Card') }}"
        description="{{ __('A basic card with only body content.') }}"
        path="views/demo/card/simple.blade.php"
        include="demo.card.simple"
    />
    <x-demo.preview-component
        title="{{ __('Card with Header') }}"
        description="{{ __('Card with a header slot.') }}"
        path="views/demo/card/header.blade.php"
        include="demo.card.header"
    />
    <x-demo.preview-component
        title="{{ __('Card with Footer') }}"
        description="{{ __('Card with a footer slot.') }}"
        path="views/demo/card/footer.blade.php"
        include="demo.card.footer"
    />
    <x-demo.preview-component
        title="{{ __('Card with Header & Footer') }}"
        description="{{ __('Card with both header and footer slots.') }}"
        path="views/demo/card/header-footer.blade.php"
        include="demo.card.header-footer"
    />
    <x-demo.preview-component
        title="{{ __('Card Skeleton Loader') }}"
        description="{{ __('Shows a loading skeleton using the $skeleton prop.') }}"
        path="views/demo/card/skeleton.blade.php"
        include="demo.card.skeleton"
    />
</div>