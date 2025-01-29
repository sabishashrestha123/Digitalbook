<?php

namespace App\Http\Requests\Book;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateBookRequest extends FormRequest
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
            'title' => 'required|string|max:255',
            'author' => 'required|string|max:255',
            'edition' => 'required|string|max:255',
            'isbn' => 'required|string|max:255',
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'file' => 'required|mimes:pdf|max:2048',
            'book_category_id' => ['required',Rule::exists('book_categories','id')],
            'status' => 'nullable|boolean',
        ];
    }
}
