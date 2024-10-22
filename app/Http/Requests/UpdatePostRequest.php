<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'category' => ['required'],
            'title' => ['required'],
            'content' => ['required'],
        ];
    }

    public function fields(): array
    {
        return [
            'category_id' => $this->input('category'),
            'title' => $this->input('title'),
            'content' => $this->input('content'),
        ];
    }
}
