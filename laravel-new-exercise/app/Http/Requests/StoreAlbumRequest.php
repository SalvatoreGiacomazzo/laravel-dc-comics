<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAlbumRequest extends FormRequest
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
            "album_name" => "required|string|min:4|max:255",
            "band_name" => "required|string|min:3|max:255",
            "drop_year" => "required|numeric|digits:4|min:1900|max:2024",
            "genre" => "required|string|min:3|max:255",
            "img_Url" => "required|url"

        ];
    }
    public function messages()
    {

        return [
            "album_name.required" => "Il nome dell'album è obbligatorio.",
            "album_name.min" => "Il nome dell'album deve essere di almeno 4 caratteri.",
            "band_name.required" => "Il nome della band è obbligatorio.",
            "band_name.min" => "Il nome della band deve essere di almeno 3 caratteri.",
            "drop_year.required" => "L'anno di uscita è obbligatorio.",
            "drop_year.digits" => "L'anno di uscita deve avere 4 cifre.",
            "genre.required" => "Il genere è obbligatorio.",
            "genre.min" => "Il genere deve contenere almeno 3 caratteri.",
            "img_Url.required" => "L'URL dell'immagine è obbligatorio.",
            "img_Url.url" => "L'URL dell'immagine deve essere valido.",
        ];
    }
}
