<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateMahasiswaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        $mahasiswaId = $this->route('mahasiswa')->id;

        return [
            'nim'     => ['required', 'string', 'max:20', Rule::unique('mahasiswas')->ignore($mahasiswaId)],
            'nama'    => ['required', 'string', 'max:100'],
            'jurusan' => ['required', 'string', 'max:100'],
            'email'   => ['required', 'email', 'max:100', Rule::unique('mahasiswas')->ignore($mahasiswaId)],
        ];
    }
}