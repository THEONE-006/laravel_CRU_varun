<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class validateRequest extends FormRequest
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
            'name'=>['bail','required','regex:/^[A-Za-z\s]+$/','max:255'],
            'mobno'=>['bail','required','numeric','digits:10'],
            'email'=>['bail','required','email:rfc,dns','max:255'],
            'age'=>['bail','nullable','numeric','max_digits:3'],
            'gender'=>['bail','nullable','in:Male,Female,Other'],
            'hobbies'=>['bail','nullable','array']         
        ];
        
    }
}
?>
