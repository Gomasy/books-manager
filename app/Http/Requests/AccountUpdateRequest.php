<?php
declare(strict_types=1);

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class AccountUpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {
        return [
            'email' => [ 'required', 'email', 'max:255', Rule::unique('users')->ignore(\Auth::id()) ],
            'name' => [ 'required', 'max:255' ],
            'password' => [ 'nullable', 'min:6', 'confirmed' ],
        ];
    }
}
