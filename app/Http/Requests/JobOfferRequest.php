<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Foundation\Http\FormRequest;
use App\Models\JobOffer;

class JobOfferRequest extends FormRequest
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
     * @return array<string, ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title' => 'required|string|max:255|min:2',
            'description' => 'required|string|max:1000|min:10',
            'location' => 'required|string|max:255|min:2',
            'salary' => 'required|integer|min:0|max:1000000',
            'experience_level' => 'required|in:' . implode(',', JobOffer::$experience),
            'category' => 'required|in:' . implode(',', JobOffer::$categories),
        ];
    }
}
