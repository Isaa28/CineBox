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
            'session_id' => 'required|exists:sessions_cine,id',
            'seat_number' => [
                'required',
                'numeric',     
                'min:1',
                'max:250',
                Rule::unique('tickets')->where(fn($q) => $q->where('session_id', $this->session_id))->ignore($this->ticket),
            ],
            'customer_name' => 'required|string|min:3|max:255',
            'purchase_date' => 'required|date',
        ];
    }
}
