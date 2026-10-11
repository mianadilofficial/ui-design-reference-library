 @if (auth()->user()->canBeModified($user) || auth()->user()->can('user.login_as') || auth()->user()->canBeModified($user, 'user.delete'))
    <x-buttons.action-buttons :label="__('Actions')" :show-label="false" align="right">
        @if (auth()->user()->canBeModified($user))
            <x-buttons.action-item
                :href="route('admin.users.edit', $user->id)"
                icon="lucide:pencil"
                :label="__('Edit')"
            />
        @endif

        @if (auth()->user()->can('user.login_as') && $user->id != auth()->user()->id)
            <x-buttons.action-item
                :href="route('admin.users.login-as', $user->id)"
                icon="lucide:log-in"
                :label="__('Login as')"
            />
        @endif

        @if (auth()->user()->canBeModified($user, 'user.delete'))
            <div x-data="{ deleteModalOpen: false }">
                <x-buttons.action-item
                    type="modal-trigger"
                    modal-target="deleteModalOpen"
                    icon="lucide:trash"
                    :label="__('Delete')"
                    class="text-red-600 dark:text-red-400"
                />

                <x-modals.confirm-delete
                    id="delete-modal-{{ $user->id }}"
                    title="{{ __('Delete User') }}"
                    content="{{ __('Are you sure you want to delete this user?') }}"
                    formId="delete-form-{{ $user->id }}"
                    formAction="{{ route('admin.users.destroy', $user->id) }}"
                    modalTrigger="deleteModalOpen"
                    cancelButtonText="{{ __('No, cancel') }}"
                    confirmButtonText="{{ __('Yes, Confirm') }}"
                />
            </div>
        @endif
    </x-buttons.action-buttons>
    @endif