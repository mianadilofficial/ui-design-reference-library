<?php

declare(strict_types=1);

namespace App\Http\Requests\Role;

use App\Enums\Hooks\RoleFilterHook;
use App\Http\Requests\FormRequest;
use App\Support\Facades\Hook;

class UpdateRoleRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        // Authorization is handled by the controller using policies.
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $roleId = $this->role ?? $this->route('role');

        return Hook::applyFilters(RoleFilterHook::ROLE_UPDATE_VALIDATION_RULES, [
            /** @example "Senior Content Writer" */
            'name' => 'required|max:100|unique:roles,name,'.$roleId,

            /** @example ["post.create", "post.edit", "post.delete", "user.view"] */
            'permissions' => 'required|array|min:1',

            /** @example "user.view" */
            'permissions.*' => 'string|exists:permissions,name',
        ], $roleId);
    }
}
