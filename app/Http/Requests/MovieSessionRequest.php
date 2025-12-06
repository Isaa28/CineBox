<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class MovieSessionRequest extends FormRequest
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
        $routeParam = $this->route('session') ?? $this->route('MovieSession') ?? $this->route('id');
        $sessionId = null;

        if (is_object($routeParam) && property_exists($routeParam, 'id')) {
            $sessionId = $routeParam->id;
        } elseif (is_numeric($routeParam) || is_string($routeParam)) {
            $sessionId = $routeParam;
        }

        return [
            'name' => [
                'required',
                'string',
                'min:3',
                'max:100',
                Rule::unique('sessions_cine')->ignore($sessionId),
            ],
            'movie_id' => 'required|exists:movies,id',
            'room_id' => 'required|exists:rooms,id',
            'date_time' => 'required|date|after_or_equal:today',
        ];
    }
}
