<?php

namespace App\Http\Requests\Fish;

use Illuminate\Foundation\Http\FormRequest;

class FishUpdateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'id' => ['required', 'exists:fish'],
            'name' => ['required', 'max:64'],
        ];
    }
}
