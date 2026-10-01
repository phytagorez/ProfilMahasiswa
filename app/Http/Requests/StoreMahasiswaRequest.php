<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMahasiswaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'nim'     => ['required', 'string', 'max:20', 'unique:mahasiswas,nim'],
            'nama'    => ['required', 'string', 'max:100'],
            'jurusan' => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:100', 'unique:mahasiswas,email'],
        ];
    }
}