<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BookEditRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function rules(): array
    {
        return [
            
                "title" => "required|string|max:255|min:2",
                "pages" => "required|numeric",
                "year" => "required",
                "image"=> "mimes:bmp,png,jpeg,webpl,jpg",
                "author_id" => "required",
        ];
    }

    public function messages(){
        return [
            'title.max' => 'Devi inserire il titolo di massimo 255 caratteri',
            'title.min' => 'Devi inserire il titolo di minimo 2 caratteri',
            'title.required' => 'Devi inserire il titolo',
            'title.string' => 'Il titolo deve essere composto di lettere e parole',
            'pages.required'=>'Devi inserire il numero di pagine',
            'pages.numeric'=>'Devi inserire un numero di pagine',
            'year.required'=>'Devi inserire anno',
            'image.mimes' => 'Inserisci immagine nei formati corretti: bmp,png,jpeg,webpl,jpg',
            'author_id'=>'Seleziona autore'
        ];
    }
    
}
