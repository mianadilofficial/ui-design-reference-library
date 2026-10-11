<?php

declare(strict_types=1);

namespace App\Http\Requests\Module;

use App\Enums\Hooks\ModuleFilterHook;
use App\Http\Requests\FormRequest;
use App\Support\Facades\Hook;

class StoreModuleRequest extends FormRequest
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
        return Hook::applyFilters(ModuleFilterHook::MODULE_STORE_VALIDATION_RULES, [
            'module' => 'required|file|mimes:zip',
        ]);
    }

    /**
     * Get the custom messages for the validation rules.
     */
    public function messages(): array
    {
        return Hook::applyFilters(
            ModuleFilterHook::MODULE_STORE_VALIDATION_MESSAGES,
            [
                'module.required' => __('The module file is required.'),
                'module.file' => __('The module must be a valid file.'),
                'module.mimes' => __('The module must be a zip file. Please follow the guidelines for module creation.'),
            ]
        );
    }
}
