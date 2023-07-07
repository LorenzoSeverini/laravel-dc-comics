<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreComicRequest extends FormRequest
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
            'title' => 'required|min:5|max:50',
            'description' => 'required|min:5|max:6553',
            'thumb' => 'required|url',
            'price' => 'required|min:0|max:9999.99',
            'series' => 'required|max:255',
            'sale_date' => 'required|date',
            'type' => 'required|in:comic book,graphic novel',
            'artists' => 'required|max:255',
            'writers' => 'required|max:255',
        ];
    }

    /**
     * Get the validation messages that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function messages()
    {
        return [
            'title.required' => 'Il titolo è obbligatorio 😱',
            'title.min' => 'Il titolo deve essere lungo almeno 5 caratteri',
            'title.max' => 'Il titolo deve essere lungo al massimo 50 caratteri',
            'description.required' => 'La descrizione è obbligatoria 😱',
            'description.min' => 'La descrizione deve essere lunga almeno 5 caratteri',
            'description.max' => 'La descrizione deve essere lunga al massimo 65535 caratteri',
            'thumb.required' => 'L\'url dell\'immagine è obbligatorio 😱',
            'thumb.url' => 'L\'url dell\'immagine non è valido',
            'price.required' => 'Il prezzo è obbligatorio 😱',
            'price.numeric' => 'Il prezzo deve essere un numero',
            'price.min' => 'Il prezzo deve essere maggiore di 0',
            'price.max' => 'Il prezzo deve essere minore di 9999.99',
            'series.required' => 'La serie è obbligatoria 😱',
            'series.max' => 'La serie deve essere lunga al massimo 255 caratteri',
            'sale_date.required' => 'La data di vendita è obbligatoria 😱',
            'sale_date.date' => 'La data di vendita non è valida',
            'type.required' => 'Il tipo è obbligatorio 😱',
            'type.in' => 'Il tipo deve essere "comic book" o "graphic novel"',
            'artists.required' => 'L\'artista è obbligatorio 😱',
            'artists.exists' => 'L\'artista non esiste',
            'writers.required' => 'Lo scrittore è obbligatorio 😱',
            'writers.exists' => 'Lo scrittore non esiste',
        ];
    }
}
