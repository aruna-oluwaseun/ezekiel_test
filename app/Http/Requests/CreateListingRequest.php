<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateListingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() : bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() : array
    {
        return [
            'title' => ['required', 'string', 'max:255'],
            'description' => ['required', 'string', 'max:1024'],
            'location' => ['required', 'string', 'max:255'],
            'upper_range' => ['required', 'integer', 'max:10000000'],
            'lower_range' =>  ['required', 'integer', 'max:10000000'],
        ];
    }
}
