<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class TicketRequest extends FormRequest
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
            'session_id' => 'required|exists:sessions,id',
            'seat_number' => [
                'required',
                'string',
                'min:1',
                'max:10',
                Rule::unique('tickets')->where(function ($query) {
                    return $query->where('session_id', $this->session_id);
                })->ignore($this->ticket),
            ],
            'price' => 'required|numeric|min:0|max:500',
            'client_name' => 'required|string|min:3|max:255',
        ];
    }
}
