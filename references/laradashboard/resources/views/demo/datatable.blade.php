<h3 class="text-lg mb-3 font-bold p-3 pl-0">
    {{ __('Datatable Components') }}
</h3>

<div class="flex flex-col gap-5">
    <x-demo.preview-component
        title="{{ __('Sample Todo Datatable Source Code') }}"
        description="{{ __('A basic datatable with fields of the model.') }}"
        path="views/demo/datatable/todo-datatable.blade.php"
        include="demo.datatable.todo-datatable"
        :hideCodeButton="true"
    />
    <x-demo.preview-component
        title="{{ __('User Datatable') }}"
        description="{{ __('A basic datatable with some customization fields of the user model.') }}"
        path="views/demo/datatable/datatable.blade.php"
        include="demo.datatable.datatable"
    />
</div>