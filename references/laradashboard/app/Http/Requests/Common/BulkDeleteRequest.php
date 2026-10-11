<?php

declare(strict_types=1);

namespace App\Http\Requests\Common;

use Illuminate\Foundation\Http\FormRequest;

class BulkDeleteRequest extends FormRequest
{
    public function authorize(): bool
    {
        // Authorization should be handled in the controller
        return true;
    }

    public function rules(): array
    {
        return [
            'ids' => ['required', 'array', 'min:1'],
            'ids.*' => ['integer'],
        ];
    }

    protected function prepareForValidation(): void
    {
        if ($this->has('ids') && is_array($this->input('ids'))) {
            $uniqueIds = array_unique($this->input('ids'));
            $this->merge(['ids' => $uniqueIds]);
        }
    }

    public function messages(): array
    {
        return [
            'ids.required' => __('No items selected for deletion.'),
            'ids.array' => __('Invalid selection format.'),
            'ids.min' => __('Select at least one item to delete.'),
            'ids.*.integer' => __('Each selected item must be a valid ID.'),
        ];
    }
}
