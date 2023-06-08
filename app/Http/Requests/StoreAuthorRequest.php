<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAuthorRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            
            "name" => "required|string|max:255|min:2",
            "surname" => "required|string|max:255|min:2",
            "date_birth" => "required|date",
    ];
    }

    public function messages(){
        return [
            'name.max' => 'Devi inserire un nome di massimo 255 caratteri',
            'name.min' => 'Devi inserire un nome di minimo 2 caratteri',
            'name.required' => 'Devi inserire il nome',
            'name.string' => 'Il nome deve essere composto di lettere e parole',
            'surname.max' => 'Devi inserire un cognome di massimo 255 caratteri',
            'surname.min' => 'Devi inserire un cognome di minimo 2 caratteri',
            'surname.required' => 'Devi inserire il cognome',
            'surname.string' => 'Il cognome deve essere composto di lettere e parole',
            'date_birth.required' => 'Devi inserire la data di nascita, formato YYYY-MM-DD',
            'date_birth.string' => 'Deve essere una data, formato YYYY-MM-DD',
        ];
    }
}
