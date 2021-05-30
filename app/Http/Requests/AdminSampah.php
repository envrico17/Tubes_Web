<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AdminSampah extends FormRequest
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
     * @return array
     */
    public function rules()
    {
        return [
                'kode_sampah' => 'size:4|unique:sampahs,kode_sampah',
                'jenis_sampah' => 'required',
                'nama_penyetor' => 'required',
                'jumlah_sampah' =>'required|integer',
                'alamat' => 'required',
        ];
    }
}
