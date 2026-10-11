<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Modal Components') }}
</h3>

<x-demo.preview-component
    title="{{ __('Modal') }}"
    description="{{ __('Use the following component to show modals.') }}"
    path="views/demo/modal/modal-example.blade.php"
    include="demo.modal.modal-example"
/>

<br/>
<x-demo.preview-component
    title="{{ __('Modal without header footer') }}"
    path="views/demo/modal/modal-without-header-footer-example.blade.php"
    include="demo.modal.modal-without-header-footer-example"
/>