<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PengurusCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'name' => 'required',
            'photo' => 'required',
            'address' => 'required',
            'gender' => 'required',
            'place_birth' => 'required',
            'date_birth' => 'required',
            'position' => 'required',
        ];
    }

    public function messages() {
        return [
            'name.required' => 'Nama tidak boleh kosong',
            'photo.required' => 'Foto tidak boleh kosong',
            'address.required' => 'Alamat tidak boleh kosong',
            'gender.required' => 'Jenis kelamin tidak boleh kosong',
            'place_birth.required' => 'Tempat lahir tidak boleh kosong',
            'date_birth.required' => 'Tanggal lahir tidak boleh kosong',
            'position.required' => 'Posisi tidak boleh kosong',
        ];
    }
}
