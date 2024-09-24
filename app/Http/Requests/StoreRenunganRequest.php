<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreRenunganRequest extends FormRequest
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
            'title' => 'required|string',
            'bacaan' => 'required|string',
            'ayat_kunci' => 'required|string',
            'kalimat_prinsip' => 'required|string',
            'kalimat_renung' => 'required|string',
            'date_renungan' => 'required|date',
            'content' => 'required|string',
            'doa' => 'required|string',
        ];
    }
}
