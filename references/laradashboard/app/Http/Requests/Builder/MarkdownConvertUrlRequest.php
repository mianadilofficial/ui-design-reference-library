<?php

declare(strict_types=1);

namespace App\Http\Requests\Builder;

use Illuminate\Foundation\Http\FormRequest;

class MarkdownConvertUrlRequest extends FormRequest
{
    public function authorize(): bool
    {
        $user = $this->user();

        if ($user === null) {
            return false;
        }

        return $user->can('post.create')
            || $user->can('post.edit')
            || $user->can('email_template.create')
            || $user->can('email_template.edit');
    }

    /**
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'url' => ['required', 'url', 'max:2048'],
        ];
    }
}
