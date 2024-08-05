<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequests extends FormRequest
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
        'posts.title' => 'required|string|max:255',
        'posts.content' => 'required|string',
        'posts.author' => 'required|string|max:255',
        'posts.image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048', 
        'posts.description' => 'nullable|string',
        'posts.view' => 'required',
        'posts.idCategory' => 'required',
        
        
        ];
    }
}
