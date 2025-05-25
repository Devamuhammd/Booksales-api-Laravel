<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthorRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'bio' => 'nullable|string',
            'birth_date' => 'nullable|date|before:today'
        ];

        // For update, make email unique except current record
        if ($this->isMethod('PUT') || $this->isMethod('PATCH')) {
            $rules['email'] = 'required|email|max:255|unique:authors,email,' . $this->route('author');
        } else {
            $rules['email'] = 'required|email|max:255|unique:authors,email';
        }

        return $rules;
    }

    public function messages()
    {
        return [
            'name.required' => 'Nama author wajib diisi',
            'email.required' => 'Email wajib diisi',
            'email.email' => 'Format email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'birth_date.before' => 'Tanggal lahir harus sebelum hari ini',
            'birth_date.date' => 'Format tanggal tidak valid'
        ];
    }
}
