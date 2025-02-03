<?php

namespace App\Http\Requests\Book;

use App\Models\BookCategory;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreBookRequest extends FormRequest
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
            'cover_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg',
            'file' => 'required|mimes:pdf',
            'book_category_id' => ['required',Rule::exists('book_categories','id')],
            'semester_id' => ['required',Rule::exists('semesters','id')],
            'status' => 'nullable|boolean',
        ];
    }
}
